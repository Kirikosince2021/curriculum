<?php
define('DATABASE','check4');
define('USERNAME','root');
define('PASSWORD','root');
define('PDO_DSN','mysql:host=localhost;charset=utf8;dbname='.DATABASE);

function db_connect() {
    try {
        $pdo = new PDO(PDO_DSN, USERNAME, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo $e->getMessage();
        die();
    }
}
?>