<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST["name"];
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$answers = $_POST["answers"];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function judge($q,$answer) {
    if($q == $answer) {
        echo "正解！";
    }else{
        echo "残念・・・";
    }
}

?>
<head>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="content">
        <p><?php echo $name; ?>さんの結果は・・・？</p>
        <p>①の答え</p>
        <!--作成した関数を呼び出して結果を表示-->
        <?php judge($q1,$answers[0]); ?>

        <p>②の答え</p>
        <!--作成した関数を呼び出して結果を表示-->
        <?php judge($q2,$answers[1]); ?>

        <p>③の答え</p>
        <!--作成した関数を呼び出して結果を表示-->
        <?php judge($q3,$answers[2]); ?>
    </div>
</body>