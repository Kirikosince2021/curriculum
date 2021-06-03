<?php
include_once('db_connect.php');
include_once('function.php');

if(!empty($_POST)) {
    checkEmpty($_POST['name'],$_POST['password']);

    if(!empty($_POST['name']) && !empty($_POST['password'])) {
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);

        //ハッシュ化
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        try {
            $pdo = db_connect();
            $sql = 'INSERT INTO users(name,password) VALUES(?,?)';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1,$name);
            $stmt->bindParam(2,$password_hash);
            $stmt->execute();
            
            echo "登録が完了しました。";
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="content">
    <h1>ユーザー登録画面</h1>
        <form method="post">
            <input placeholder="ユーザー名" name="name"><br>
            <input placeholder="パスワード" name="password"><br>
            <input class="submitButton" type="submit" value="新規登録">
        </form>
    </div> 
</body>
</html>