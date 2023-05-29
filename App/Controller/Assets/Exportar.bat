cd\

C:

C:\"Program Files"\MySQL\"MySQL Server 8.0"\bin\mysqldump -hlocalhost -P3307 -uroot -petecjau db_sistema_veiculos --databases > D:/Backup/Backup_Full.sql

C:\"Program Files"\MySQL\"MySQL Server 8.0"\bin\mysqldump -hlocalhost -P3307 -uroot -petecjau db_sistema_veiculos --no-create-info --databases > D:/Backup/Backup_Data.sql

C:\"Program Files"\MySQL\"MySQL Server 8.0"\bin\mysqldump -hlocalhost -P3307 -uroot -petecjau db_sistema_veiculos --no-data --databases > D:/Backup/Backup_Structure.sql