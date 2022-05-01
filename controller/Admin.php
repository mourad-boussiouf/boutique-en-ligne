<?php

class Admin extends Controller
{
    public function __construct()
    {

    }

    public static function index() // ACCEUIL PANEL ADMIN
    {
        $user = new UserModel();
        $userall = count($user->getALL());
        $article = new ArticlesModel();
        $articleall = count($article->getALL());
        self::renderPanelAdmin('admin', compact('userall', 'articleall'));
    }

    public static function articles() // 
    {
        $categorie = new CategorieModel();
        $souscategorie = new SouscategorieModel();
        $model = new ArticlesModel();
        $prod = $model->getArticlesByDate();
        $categorieAll=$categorie->getALL();
        $souscategorieAll = $souscategorie->getALL();
        

        if(isset($_POST['ajouter'])){
            $nom = $_POST['name'];
            $prix = $_POST['price'];
            $image = $_POST['image'];
            $image2 = $_POST['image2'];
            $descr = $_POST['descr'];
            $cat = $_POST['idcategorie'];
            $sousCat = $_POST['idsouscat'];
            $add = new ArticlesModel();
            $add->addArticle($nom, $prix, $image, $image2, $descr, $cat, $sousCat);
            echo "<div class = reussi> Article correctement inséré à la BDD ! </div>";
            header('Refresh:2;url='.path.'adminarticles');
        }
        if(isset($_POST['delete'])){
            var_dump($_POST['idproduct']);
            $idproduct = $_POST['idproduct'];
            $delete = new ArticlesModel();
            $delete->deleteArticle($idproduct);
            echo "<div class = error> Les données liées à cet ID ont étaient effacées. </div>";
            header('Refresh:2;url='.path.'adminarticles');
        }
        if(isset($_POST['createcat'])){
            
            $newCatName = $_POST['newcatname'];
            $createCat = new CategorieModel();
            $createCat->addCategorie($newCatName);
            echo "<div class = reussi> Cette catégorie a été créee.</div>";
            header('Refresh:2;url='.path.'adminarticles');
        }
        if(isset($_POST['createsubcat'])){
            
            $newSubCatName = $_POST['newsubcatname'];
            $createCat = new SouscategorieModel();
            $createCat->addSousCat($newSubCatName);
            echo "<div class = reussi> Cette sous-catégorie a été créee.</div>";
            header('Refresh:2;url='.path.'adminarticles');
        }
        self::renderPanelAdmin('adminarticles', compact('categorieAll','souscategorieAll','prod'));
    }


    public static function user() // ACCEUIL PANEL ADMIN
    {
        $pageask = explode('/', $_GET['p']);
        $user = new UserModel();
        $userlist = $user->getALL();
        
        if (isset($pageask[1]) && is_numeric($pageask[1])) {
            $toModifyId = $pageask[1];
            $modUser = new UserModel();
            $selectedUser = $modUser->getOne('id',$toModifyId);

            if (isset($_POST['modifyuser'])) {
            $updateId = $selectedUser[0]['id'];
            $updateEmail = $_POST['emailuser'];
            $updatePhone = $_POST['phoneuser'];
            $updateAdress = $_POST['adressuser'];
            $updateRank = $_POST['rankuser'];
            $updateNom = $_POST['lastnameuser'];
            $updatePrenom = $_POST['firstnameuser'];
            $selectTheUser = new UserModel();
            $updateTheUser = $selectTheUser->updateAll($updateEmail, $updatePhone, $updateAdress, $updateRank, $updateNom, $updatePrenom, $updateId);
            echo "<div class = reussi> Cet utilisateur à été modifié.</div>";
            header('Refresh:1.5;url='.path.'adminuser');
            }


    
        self::renderPanelAdmin('adminuser',  compact('selectedUser','userlist'));
        }
        self::renderPanelAdmin('adminuser',  compact('userlist'));
    }

    public static function commandes() {
        $pageask = explode('/', $_GET['p']);
        $model = new OrdersModel();

        if (isset($_POST['iduserorder'])){

        $idOfUser = intval($_POST['iduserorder']);
        $ordersOfUser = $model->getOrdersOfAnUser($idOfUser);

        self::renderPanelAdmin('admincommandes', compact('ordersOfUser'));
        }

        if (isset($pageask[1]) && is_numeric($pageask[1])) {
            $theOrderId = $pageask[1];
            $modOrder = new OrdersModel();
            $selectedOrder = $modOrder->getOne('id',$theOrderId);

            if (isset($_POST['modifyorder'])) {

                $newDelivery = $_POST['deliverydisplay'];
                $newStatus = $_POST['statusdisplay'];
                $orderId = $pageask[1];


                $updateOrder = $modOrder->updateOrder($newDelivery,$newStatus,$orderId);
            echo "<div class = reussi> Modification de la commande effectuée.</div>";
            header('Refresh:1.8;url='.path.'admincommandes');
            }
            
            self::renderPanelAdmin('admincommandes', compact('selectedOrder'));
        }

    self::renderPanelAdmin('admincommandes');
    }
}





