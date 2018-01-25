<?php
    function __autoload($class_name){
        if(file_exists("app/".$class_name.".php")){
            require_once "app/".$class_name.".php";
        }elseif(file_exists("config/".$class_name.".php")){
            require_once "config/".$class_name.".php";
        }elseif(file_exists("sys/".$class_name.".php")){
            require_once "sys/".$class_name.".php";
        }elseif(file_exists("app/controllers/".$class_name.".php")){
            require_once "app/controllers/".$class_name.".php";        
        }elseif(file_exists("modules/".$class_name.".php")){
            require_once "app/modules/".$class_name.".php";
        }
    }