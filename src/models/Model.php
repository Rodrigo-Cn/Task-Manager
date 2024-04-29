<?php

    require_once(realpath(__FILE__).'/../config/config.php');

    class Model{
        protected static $tableName;
        protected static $columns = [];
        protected $values = [];

        public function __construct($array)
        {
            $this->loadFromArray($array);
        }

        public function loadFromArray($array){
            if($array){
                foreach($array as $key => $value){
                    $this->$key = $value;
                }
            }
        }

        public function __set($key, $value){
            $this->values[$key] = $value;
        }

        public function __get($key){
            return $this->values[$key];
        }

        public static function get($filters = [], $column = '*'){
            $objects = [];
            $result = static::getResultSetFromSelect($filters, $column);
            $class = get_called_class();
            if($result){
                while($row = $result->fetch_assoc()){
                    array_push($objects, new $class($row));
                }
            }

            return $objects;
        }

        public static function getOne($filters = [], $column = '*'){
            $result = static::getResultSetFromSelect($filters, $column);
            $class = get_called_class();
            return $result ? new $class($result->fetch_assoc()) : null;
        }

        public static function getResultSetFromSelect($filters = [], $column = '*'){
            $sql = 'SELECT ' . $column . ' FROM ' . static::$tableName . static::getFilter($filters);
            $database = new DataBase();
            $result = $database->getResultFromQuery($sql);

            if($result->num_rows === 0){
                return null;
            }else{
                return $result;
            }
        }

        
        private static function getFilter($filters){
            $sql = '';

            if(count($filters)>0){
                $sql .= " WHERE 1 = 1";
                foreach($filters as $column => $value){
                    $sql .= " AND " . $column." = " . static::getFormatedValue($value);
                }
            }

            return $sql;
        }

        private static function getFormatedValue($value){
            if(is_null($value)){
                return null;
            }elseif(gettype($value) == 'string'){
                return "'".$value."'";
            }
            else{
                return $value;
            }
        }
    }

?>