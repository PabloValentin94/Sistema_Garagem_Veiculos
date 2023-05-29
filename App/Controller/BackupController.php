<?php

namespace App\Controller;

//use \PDO;

class BackupController
{

    // Pastas cujos nomes possuam espaços, devem ser colocadas entre aspas.

    public static function Export_Backup()
    {

        $reparticao = "D:";

        exec("$reparticao");

        if(!is_dir("$reparticao/Backup"))
        {
            
            exec("md Backup");

        }

        // Excluindo os arquivos, se existirem, para não dar um erro de sobrescrição.

        if(file_exists("D:/Backup/Backup_Full.sql"))
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

        }

        /* Parâmetros - mysqldump:

        -h: "endereço" da conexão. Exemplo: localhost.

        -u: usuário. Exemplo: root.

        -P: porta da conexão. Exemplo: 3307.

        -p: senha. Exemplo: etecjau. */
        
        /* Observação: Não deve haver espaços entre o parâmetro e seu valor. Exemplo:
        
        Errado: -u root

        Certo: -uroot */

        if(file_exists("$reparticao/Backup/Export/Exportar.bat"))
        {

            exec("$reparticao/Backup/Export/Exportar.bat");

            header("Location: /");

        }

        else
        {

            if(file_exists(BASEDIR . "App/Controller/Assets/Exportar.bat"))
            {

                exec(BASEDIR . "App/Controller/Assets/Exportar.bat");

                header("Location: /");

            }

            else
            {

                exec('C:/"Program Files"/MySQL/"MySQL Server 8.0"/bin/mysqldump -hlocalhost -P3307 -uroot -petecjau db_sistema_veiculos --databases > ' . $reparticao . '/Backup/Backup_Full.sql');

                exec('C:/"Program Files"/MySQL/"MySQL Server 8.0"/bin/mysqldump -hlocalhost -P3307 -uroot -petecjau db_sistema_veiculos --no-data --databases > ' . $reparticao . '/Backup/Backup_Structure.sql');

                exec('C:/"Program Files"/MySQL/"MySQL Server 8.0"/bin/mysqldump -hlocalhost -P3307 -uroot -petecjau db_sistema_veiculos --no-create-info --databases > ' . $reparticao . '/Backup/Backup_Data.sql');

                header("Location: /");

            }

        }

    }

    public static function Import_Backup()
    {

        $reparticao = "D:";

        exec("$reparticao");

        if(is_dir("$reparticao/Backup"))
        {

            if(file_exists("$reparticao/Backup/Backup_Full.sql"))
            {

                if(is_dir("$reparticao/Backup/Import"))
                {

                    if(file_exists("$reparticao/Backup/Import/Importar.bat"))
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

                        /*$saida = null;
                        $codigo_saida = null;

                        exec('mysql -hlocalhost -P3307 -uroot -petecjau < "D:\Backup\Backup_Full.sql" ', $saida, $codigo_saida);

                        var_dump($saida, $codigo_saida);*/

                        exec("$reparticao/Backup/Import/Importar.bat");

                        header("Location: /");

                    }

                    else
                    {

                        exit("Arquivo de importação de backup não encontrado.");

                    }

                }

                else
                {

                    if(file_exists(BASEDIR . "App/Controller/Assets/Importar.bat"))
                    {

                        exec(BASEDIR . "App/Controller/Assets/Importar.bat");

                        header("Location: /");

                    }

                    else
                    {

                        exec('cd C:/"Program Files"/MySQL/"MySQL Server 8.0"/bin');
                    
                        exec("mysql -hlocalhost -P3307 -uroot -petecjau < C:\Backup\Backup_Full.sql");

                        header("Location: /");

                    }

                }
    
            }

            else
            {

                exit("Arquivo de backup não encontrado!");

            }

        }

        else
        {

            exit("Pasta de backup não encontrada!");

        }

    }

}

?>