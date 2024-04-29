<?php

    use Model;
    use mysqli;
    require_once(realpath(MODEL_PATH . "Model.php"));
    require('Tarefa.php');
    
    class Tarefa extends Model{

        protected static $tableName = "tarefa";
        protected static $columns = [
            'id',
            'titulo',
            'id_usuario'
        ];
        
    }
?>