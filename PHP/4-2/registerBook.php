<?php
include_once('db_connect.php');
include_once('function.php');

if(!empty($_POST)) {
    if (!empty($_POST['title']) && !empty($_POST['date']) && !empty($_POST['stock'])) {
        $title = $_POST['title'];
        $date = $_POST['date'];
        $stock = $_POST['stock'];

        try {
            $pdo = db_connect();
            $sql = "INSERT INTO books(title,date,stock) VALUES(?,?,?)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(1,$title);
            $stmt->bindParam(2,$date);
            $stmt->bindParam(3,$stock);

            $stmt->execute();
            header("Location: main.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    } else {
        echo 'データに未入力箇所があります。';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>本登録画面</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="content">
        <h1>本登録画面</h1>
        <form method="post">
            <input placeholder="タイトル" name="title"><br>
            <input placeholder="発売日" name="date">
            <p>在庫数</p>
            <select name="stock">
                <option value="" disabled selected style="display:none">選択してください</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
            <br>
            <input class="submit" type="submit" value="登録">
        </form>
        
    </div>
</body>
</html>