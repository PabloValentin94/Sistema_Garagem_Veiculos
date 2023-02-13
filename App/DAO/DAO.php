<?php

namespace App\DAO;

use \PDO;

abstract class DAO
{

    protected $conexao;

    protected function __construct()
    {

        $dsn = "mysql:host=" . $_ENV["database"]["host"] . ";dbname=" . $_ENV["database"]["db_name"];

        $user = $_ENV["database"]["user"];

        $password = $_ENV["database"]["passowrd"];

        $this->conexao = new PDO($dsn, $user, $password);

    }

}

?>