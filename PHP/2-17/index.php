<?php
    //EXTRA問題①
    $count = 0;
    for($sum = 0; $sum <= 40; $count++) {
        $num = mt_rand(1,6);
        $sum += $num;
        echo $count."回目=".$num."<br>";
    }
    echo "合計".$count."回でゴールしました"."<br>";

    //EXTRA問題②
    date_default_timezone_set('Asia/Tokyo');
    $nowHour = date("H",time());

    echo "今".$nowHour."時台です<br>";
    if($nowHour >= 5 && $nowHour < 10) {
        echo "おはようございます";
    } elseif($nowHour >= 10 && $nowHour < 17) {
        echo "こんにちは";
    } else {
        echo "こんばんは";
    }
?>