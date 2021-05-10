<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST["name"];
//①画像を参考に問題文の選択肢の配列を作成してください。
$opt1 = ["80","22","20","21"];
$opt2 = ["PHP","Python","JAVA","HTML"];
$opt3 = ["join","select","insert","update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answers = ["80","HTML","select"];
?>
<head>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="content">
        <p>お疲れ様です<?php echo $name ?>さん</p>
        <!--フォームの作成 通信はPOST通信で-->
        <form action="answer.php" method="post">
            <h2>①ネットワークのポート番号は何番？</h2>
            <!--③ 問題のradioボタンを「foreach」を使って作成する-->
            <?php foreach($opt1 as $value) { ?>
                <input type="radio" name="q1" value=<?php echo $value?>>
                <?php echo $value ?>
            <?php }?>

            <h2>②Webページを作成するための言語は？</h2>
            <!--③ 問題のradioボタンを「foreach」を使って作成する-->
            <?php foreach($opt2 as $value) { ?>
                <input type="radio" name="q2" value=<?php echo $value?>>
                <?php echo $value ?>
            <?php }?>

            <h2>③MySQLで情報を取得するためのコマンドは？</h2>
            <!--③ 問題のradioボタンを「foreach」を使って作成する-->
            <?php foreach($opt3 as $value) { ?>
                <input type="radio" name="q3" value=<?php echo $value?>>
                <?php echo $value ?>
            <?php }?>
                
            <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
            <br>
            <input type="hidden" name="name" value=<?php echo $name?>>
            <input type="hidden" name="answers[]" value=<?php echo $answers[0];?>>
            <input type="hidden" name="answers[]" value=<?php echo $answers[1];?>>
            <input type="hidden" name="answers[]" value=<?php echo $answers[2];?>>
            <input type="submit" value="回答する">
        </form>
    </div>
</body>