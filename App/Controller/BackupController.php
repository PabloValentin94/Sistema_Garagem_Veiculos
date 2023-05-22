<?php

namespace App\Controller;

use \PDO;

class BackupController
{

    // Pastas cujos nomes possuam espaços, devem ser colocadas entre aspas.

    public static function Export_Backup()
    {

        exec("D:");

        if(!is_dir("D:/Backup/"))
        {
            
            exec("cd D:/");

            exec("md Backup");

        }

        // O MySQL sobrescreve o conteúdo. Não é necessário recriar os arquivos de backup.

        /*if(file_exists("D:/Backup/Backup_Full.sql"))
        {

            exec("del D:/Backup/Backup_Full.sql");

        }

        if(file_exists("D:/Backup/Backup_Structure.sql"))
        {

            exec("del D:/Backup/Backup_Structure.sql");

        }

        if(file_exists("D:/Backup/Backup_Data.sql"))
        {

            exec("del D:/Backup/Backup_Data.sql");

        }*/

        /*

        Parâmetros - mysqldump:

        -h: "endereço" da conexão. Exemplo: localhost.

        -u: usuário. Exemplo: root.

        -P: porta da conexão. Exemplo: 3307.

        -p: senha. Exemplo: etecjau.

        */

        exec('C:\"Program Files"\MySQL\"MySQL Server 8.0"\bin\mysqldump -hlocalhost -P3307 -uroot -petecjau db_sistema_veiculos --databases > D:/Backup/Backup_Full.sql');

        exec('C:\"Program Files"\MySQL\"MySQL Server 8.0"\bin\mysqldump -hlocalhost -P3307 -uroot -petecjau db_sistema_veiculos --no-data --databases > D:/Backup/Backup_Structure.sql');

        exec('C:\"Program Files"\MySQL\"MySQL Server 8.0"\bin\mysqldump -hlocalhost -P3307 -uroot -petecjau db_sistema_veiculos --no-create-info --databases > D:/Backup/Backup_Data.sql');

        header("Location: /");

    }

    public static function Import_Backup()
    {

        exec("D:");

        if(is_dir("D:/Backup"))
        {

            if(file_exists("D:/Backup/Backup_Full.sql"))
            {

                if(is_dir("D:/Backup/Import"))
                {

                    if(file_exists("D:/Backup/Import/Importar.bat"))
                    {

                        /*$arquivo = file_get_contents("D:/Backup/Backup_Full.sql");

                        shell_exec('C:\\"Program Files"\\MySQL\\"MySQL Server 8.0"\\bin\\mysql -hlocalhost -P3307 -uroot -petecjau < D:/Backup/Backup_Full.sql');

                        $dsn = "mysql:host=" . $_ENV["database"]["host"];

                        $user = $_ENV["database"]["user"];

                        $password = $_ENV["database"]["password"];

                        $conexao_temporaria = new PDO($dsn, $user, $password);

                        $sql = "?";

                        $stmt = $conexao_temporaria->prepare($sql);

                        $stmt->bindValue(1, $arquivo);

                        $stmt->execute();*/

                        //$saida = null;
                        $codigo_saida = null;

                        //exec('mysql -hlocalhost -P3307 -uroot -petecjau < "D:\Backup\Backup_Full.sql" ', $saida, $codigo_saida);

                        exec('D:/Backup/Import/Importar.bat');

                        //var_dump($saida, $codigo_saida);

                        header("Location: /");

                    }

                }
    
            }

        }

    }

}

?>