<?php namespace classe;

    use Model;
    use mysqli;
    require_once(realpath(MODELPATH . "Model.php"));
    require('Tarefa.php');
    
    class Usuario extends Model{

        protected static $tableName = "usuario";
        protected static $columns = [
            'id',
            'nome',
            'idade',
            'email',
            'senha'
        ];
        
    }
?>