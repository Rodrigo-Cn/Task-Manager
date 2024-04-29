<?php

    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, 'pt_BR.utf-8','portuguese');

    define('MODEL_PATH',realpath(dirname(__FILE__).'/../models'));
    define('VIEW_PATH',realpath(dirname(__FILE__).'/../views'));
    define('CONTROLLER_PATH',realpath(dirname(__FILE__).'/../controllers'));
    define('EXCEPTION_PATH',realpath(dirname(__FILE__).'/../exceptions'));

    require_once(realpath(__FILE__).'database.php');
    require_once(realpath(__FILE__).'loader.php');
    require_once(realpath(MODEL_PATH. '/Model.php'));
    require_once(realpath(EXCEPTION_PATH. '/AppException.php'));

?>