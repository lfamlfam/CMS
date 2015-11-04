# CMS
Exemplos de códigos da disciplina de CMS do curso de TSI do Centro Universitário SENAC

Tabelas do Banco de Dados

mysql> desc tb_post ;
+----------+-----------+------+-----+---------+----------------+
| Field    | Type      | Null | Key | Default | Extra          |
+----------+-----------+------+-----+---------+----------------+
| id       | int(11)   | NO   | PRI | NULL    | auto_increment |
| titulo   | char(255) | YES  |     | NULL    |                |
| conteudo | text      | YES  |     | NULL    |                |
+----------+-----------+------+-----+---------+----------------+

mysql> desc tb_usuario;
+-------+--------------+------+-----+---------+----------------+
| Field | Type         | Null | Key | Default | Extra          |
+-------+--------------+------+-----+---------+----------------+
| id    | int(11)      | NO   | PRI | NULL    | auto_increment |
| nome  | varchar(255) | YES  |     | NULL    |                |
| login | varchar(255) | YES  |     | NULL    |                |
| senha | varchar(100) | YES  |     | NULL    |                |
+-------+--------------+------+-----+---------+----------------+

