<?php
    use Model;
    use mysqli;
    require_once(realpath(MODEL_PATH . "Model.php"));
    
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