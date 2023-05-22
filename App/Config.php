<?php

define("BASEDIR", dirname(__FILE__, 2) . "/");

define("VIEWS", dirname(__FILE__) . "/View/Modules/");

define("FAVICON", "/View/Favicon.png");

$_ENV["database"]["host"] = "localhost:3306";
$_ENV["database"]["user"] = "root";
$_ENV["database"]["password"] = "etecjau";
$_ENV["database"]["db_name"] = "db_sistema_veiculos";

//define("DUMPDIR", dirname(__FILE__, 2) . "/");

?>