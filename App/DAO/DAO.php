<?php

namespace App\DAO;

use \PDO;

//use Exception;

abstract class DAO
{

    protected $conexao;

    protected function __construct()
    {

        $dsn = "mysql:host=" . $_ENV["database"]["host"] . ";dbname=" . $_ENV["database"]["db_name"];

        $user = $_ENV["database"]["user"];

        $password = $_ENV["database"]["password"];

        $this->conexao = new PDO($dsn, $user, $password);

        /*try
        {

            $dsn = "mysql:host=" . $_ENV["database"]["host"] . ";dbname=" . $_ENV["database"]["db_name"];

            $user = $_ENV["database"]["user"];

            $password = $_ENV["database"]["password"];

            $this->conexao = new PDO($dsn, $user, $password);

        }

        catch(NULL)
        {

            $dsn = "mysql:host=localhost:3306;dbname=" . $_ENV["database"]["db_name"];

            $user = $_ENV["database"]["user"];

            $password = $_ENV["database"]["password"];

            $this->conexao = new PDO($dsn, $user, $password);

        }*/

    }

}

?>