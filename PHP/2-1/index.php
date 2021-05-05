<?php

$message = "Hello World!";
echo $message;

$name = "taro";
$pass = "pass";

echo ($name == "taro" && $pass = "pass") ? "ログイン成功です。":"情報が間違っています。";

$name = "a";
echo "<br>";

echo ($name == "taro" && $pass = "pass") ? "ログイン成功です。":"情報が間違っています。";
?>