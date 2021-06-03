<?php 
include_once('db_connect.php');
include_once('function.php');

loginCheck();

try {
    $pdo = db_connect();
    $sql = "SELECT * FROM books";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫一覧画面</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="content">
        <h1>在庫一覧画面</h1>
        <a href="registerBook.php"><button class="registerButton">新規登録</button></a>
        <a href="logout.php"><button class="logoutButton">ログアウト</button></a>
        <table rules="all">
            <tr>
                <th>タイトル</th>
                <th>発売日</th>
                <th>在庫数</th>
                <th></th>
            </tr>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <?php echo '<td>'.$row['title'].'</td>';?>
                    <?php echo '<td>'.$row['date'].'</td>';?>
                    <?php echo '<td>'.$row['stock'].'</td>';?>
                    <td><a href="deleteBook.php?id=<?php echo $row['id']; ?>"><button class="deleteButton">削除</button></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>