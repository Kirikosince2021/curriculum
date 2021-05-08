<?php
//ceil
$x = ceil(3.1);
echo($x);
echo "<br>";

//floor
$x = floor(3.1);
echo($x);
echo "<br>";


//round
$x = round(3.1);
echo($x);
echo "<br>";


//pi
$x = 5 * 5 * pi();
echo($x);
echo "<br>";


//mt_rand
$x = mt_rand(1,6);
echo($x);
echo "<br>";


//strlen
$str = "あいうえお";
echo mb_strlen($str);
echo "<br>";


//strpos
echo mb_strpos($str,"え");
echo "<br>";


//substr
echo mb_substr($str,1,4);
echo "<br>";


//str_replace
echo str_replace("う","ウ",$str);
echo "<br>";


//printf
$num = 4;
printf("数字は%02d",$num);
echo "<br>";


//sprintf
$line = sprintf("数字は%02d",$num);
echo $line;
echo "<br>";


?>