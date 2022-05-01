<?php


class Mesinfos extends Controller
{

    public static function index(){

        if (isset($_POST['mesinfosmodify'])) {
            $MesinfosId = $_SESSION['id'];
            $MesinfosEmail = $_POST['emailuser'];
            $MesinfosPhone = $_POST['phoneuser'];
            $MesinfosAdress = $_POST['adressuser'];
            $MesinfosNom = $_POST['lastnameuser'];
            $MesinfosPrenom = $_POST['firstnameuser'];
            $MesinfosUpdate = new UserModel();
            $MesinfoConfirm = $MesinfosUpdate->updateMesinfos($MesinfosEmail, $MesinfosPhone, $MesinfosAdress, $MesinfosNom, $MesinfosPrenom, $MesinfosId);
            $_SESSION['email'] =  $_POST['emailuser'];
            $_SESSION['telephone'] =  $_POST['phoneuser'];
            $_SESSION['adresse'] =  $_POST['adressuser'];
            $_SESSION['nom'] =  $_POST['lastnameuser'];
            $_SESSION['prenom'] =  $_POST['firstnameuser'];


            echo "<div class = reussi> Vos informations ont étaient modifiées.</div>";
            header('Refresh:2;url='.path.'mesinfos');
        }
    self::render('mesinfos');
    }


    public static function mescommandes(){
        $id_user = $_SESSION['id'];
        $model = new OrdersModel();
        $ordersOfUser = $model->getOrdersOfAnUser($id_user);

        

        self::render('mescommandes', compact('ordersOfUser'));
    }


}