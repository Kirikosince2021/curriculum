<?php
include_once('db_connect.php');
include_once('function.php');
session_start();

if(!empty($_GET['errorMsg'])) {
    echo $_GET['errorMsg'];
}
if (!empty($_POST)) {
    checkEmpty($_POST['name'],$_POST['password']);

    if(!empty($_POST['name']) && !empty($_POST['password'])) {
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);

        try {
            $pdo = db_connect();
            $sql = 'SELECT * FROM users WHERE name = :name';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name',$name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            var_dump($row['password']);
            echo '<br>';
            echo $password;
            echo '<br>';
            var_dump(password_hash($password, PASSWORD_DEFAULT));
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                header("Location: main.php");
                exit;
            } else {
                echo 'パスワードが間違っています。';
            }
        } else {
            echo 'ユーザー名かパスワードが間違っています。';
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
    <title>ログイン画面</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="content">
        <div class="clearfix">
            <h1>ログイン画面</h1>
            <a href="registerUser.php"><button>新規ユーザー登録</button></a>
        </div>
        <form method="post">
            <input placeholder="ユーザー名" name="name"><br>
            <input type="password" placeholder="パスワード" name="password"><br>
            <input class="submitButton" type="submit" value="ログイン">
        </form>
    </div>
</body>
</html>