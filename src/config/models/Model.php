<?php

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

        public static function getSelect($filters = [], $column = '*'){
            $sql = 'SELECT ' . $column . '* FROM ' . static::$tableName . static::getFilter($filters);
            return $sql;
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