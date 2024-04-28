<?php

class DataBase{
    
    public function getConnection(){

        $envPath = realpath(dirname(__FILE__).'/../env.ini');
        $env = parse_ini_file($envPath);
        $con = new mysqli($env["host"], $env["root"], $env["mariadb"], $env["phpdb"]);

        if($con->connect_error){
            die("Erro:".$con->connect_error);
        }

        return $con;
    }

    public function getResultFromQuery($sql){

        $con = self::getConnection();
        $result = $con->query($sql);
        $con->close();

        return $result;
    }
}

?>