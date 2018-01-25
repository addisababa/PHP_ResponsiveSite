<?php
//require_once "config/Configuration.php";
class DB {
    private static $instance = null;
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new PDO('mysql:host='.Configuration::DB_HOST.';dbname='.Configuration::DB_BASE.';charset=utf8',Configuration::DB_USER,Configuration::DB_PASS);
            self::$instance->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        }
        return self::$instance;
    } 
}
