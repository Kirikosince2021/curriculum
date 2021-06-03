<?php
session_start();
$_SESSION = array();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウト画面</title>
</head>
<body>
    <h1>ログアウト画面</h1>
    <p>ログアウトしました。</p>
    <a href="login.php"><button>ログイン画面へ戻る</button></a>
</body>
</html>