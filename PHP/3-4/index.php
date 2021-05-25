<?php
require("getData.php");

//ユーザー情報、記事情報の取得
$getData = new getData();
$userData = $getData->getUserData();
$postData = $getData->getPostData();

$postData = $postData->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="1599315827_logo.png" width=200px height=120px>
        <div class="left1">
            <p>
                <span>ようこそ<?php echo $userData["last_name"].$userData["first_name"] ?>さん</span>
            </p>
        </div>
        <div class="left2">
            <p>
                <span>最終ログイン日:<?php echo $userData["last_login"] ?></span>
            </p>
        </div>
    </header>
    <main>
        <table>
            <tr>
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>
            </tr>
            <?php for($i = 0; $i < count($postData); $i++) {
                echo "<tr>";
                echo "<td>".$postData[$i]["id"]."</td>";
                echo "<td>".$postData[$i]["title"]."</td>";

                $category = "";
                switch($postData[$i]["category_no"]) {
                    case 1:
                        $category = "食事";
                        break;
                    case 2:
                        $category = "旅行";
                        break;
                    default:
                        $category = "その他";
                        break;
                }

                echo "<td>".$category."</td>";
                echo "<td>".$postData[$i]["comment"]."</td>";
                echo "<td>".$postData[$i]["created"]."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </main>
    <footer>
        <p>Y&I group.inc</p>
    </footer>
</body>
</html>