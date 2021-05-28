<?php
include_once("lib/password.php");

function getInfo() {
    $db['host'] = "localhost";
    // ユーザー名
    $db['user'] = "root";
    // ユーザー名のパスワード
    $db['pass'] = getPass();
    // データベース名
    $db['dbname'] = "loginManagement";

    return $db;
}
