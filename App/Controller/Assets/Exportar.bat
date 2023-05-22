cd\

C:

C:\"Program Files"\MySQL\"MySQL Server 8.0"\bin\mysqldump -hlocalhost -P3306 -uroot -petecjau db_sistema_veiculos --databases > C:/Backup/Backup_Full.sql

C:\"Program Files"\MySQL\"MySQL Server 8.0"\bin\mysqldump -hlocalhost -P3306 -uroot -petecjau db_sistema_veiculos --no-create-info --databases > C:/Backup/Backup_Data.sql

C:\"Program Files"\MySQL\"MySQL Server 8.0"\bin\mysqldump -hlocalhost -P3306 -uroot -petecjau db_sistema_veiculos --no-data --databases > C:/Backup/Backup_Structure.sql