<?php
require "config/autoload.php";
$cont = isset($_GET['Controller'])?$_GET['Controller']:'Home';
$method = isset($_GET['method'])?$_GET['method']:'index';

$cont = $cont.'Controller';
$a = new $cont;

$a->$method();
