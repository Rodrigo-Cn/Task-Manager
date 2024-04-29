<?php

    function loadModel($modelName){
        require_once(realpath(MODEL_PATH."/{$modelName}.php"));
    }

    function loadView($viewName, $params = array()){
        if(count($params) > 0){
            foreach($params as $key => $value){
                if(strlen($key) > 0){
                    ${$key} = $value;
                }
            }
        }
        require_once(realpath(MODEL_PATH."/{$viewName}.php"));
    }

?>