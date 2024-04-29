<?php
    loadModel("login");

    if(count($_POST) > 0){
        $login = new Login($_POST);

        try{
            $login->checkLogin();
        }catch(AppException $e){
            echo $e->getMessage();
        }
    }

    loadView("login", $_POST);

?>