<?php
require_once('db_connect.php');

$sql = 'SELECT * FROM posts';
$pdo = db_connect();

try {
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
    <title>Main</title>
</head>
<body>
    <a href="create.php"><button>記事を投稿</button></a>
    <p>記事</p>
    <table>
        <tr>
            <th>ID</th>
            <th>タイトル</th>
            <th>本文</th>
        </tr>
        
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['content']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>