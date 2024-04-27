<?php
    function novaConexao($banco = "phpdb"){
        $servidor = '127.0.0.1:3307';
        $usuario = 'root';
        $senha = 'mariadb';

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);

        if($conexao->connect_error){
            die('Erro:' . $conexao->connect_error);
        }
        return $conexao;
    }
?>