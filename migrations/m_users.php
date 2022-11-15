<?php

use kilyte\Application;

class m_users
{
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE users ( id INT AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(255) NOT NULL,lastname VARCHAR(255) NOT NULL,email VARCHAR(255) NOT NULL,password VARCHAR(255) NOT NULL,passwordConfirm VARCHAR(255) NOT NULL, updated_at VARCHAR(255), created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP  )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }
    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }
}
