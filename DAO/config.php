<?php

spl_autoload_register(function($class_name){
    $file_name = $class_name .".php";

    if (file_exists("class/".$file_name)) {
        require_once("class/".$file_name);
    }
});
?>