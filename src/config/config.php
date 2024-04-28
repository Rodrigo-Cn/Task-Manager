<?php

    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, 'pt_BR.utf-8','portuguese');
    
    define('MODELPATH',realpath(dirname(__FILE__).'/../models'));
    require_once(realpath(__FILE__).'database.php');

?>