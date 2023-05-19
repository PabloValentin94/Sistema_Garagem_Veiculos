<?php

namespace App\Controller;

class Backup_Controller
{

    public static function Export_Backup()
    {

        shell_exec("mysqldump -u root -p db_sistema_veiculos > D:/Backup_Full.sql");

        shell_exec(strval($_ENV["database"]["user"]));

        shell_exec("mysqldump -u root -p db_sistema_veiculos --no-data > D:/Backup_Structure.sql");

        shell_exec(strval($_ENV["database"]["user"]));

        shell_exec("mysqldump -u root -p db_sistema_veiculos --no-create-info > D:/Backup_Data.sql");

        shell_exec(strval($_ENV["database"]["user"]));

        echo "Exportando.";

        exit();

    }

    public static function Import_Backup()
    {

        shell_exec("mysql -h localhost -u root -p");

        shell_exec(strval($_ENV["database"]["user"]));

        shell_exec("source D:/Backup_Full.sql");

        echo "Importando.";

        exit();

    }

}

?>