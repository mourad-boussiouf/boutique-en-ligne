
<?php

class Search extends Controller{



    public static function searchMethod() {
        
        if (isset($_POST['searchvalue'])) {

            echo $_POST['searchvalue'];

            $model = new ArticlesModel;
            $searchresult = $model ->searchExactArticle($_POST['searchvalue']);

        }

        self::render('articles', compact('searchresult'));
    }

}


?>