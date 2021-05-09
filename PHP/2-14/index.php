<?php

//count
$testArray = ["a","c","b"];
echo count($testArray);
echo "<br>";

//sort
sort($testArray);
var_dump($testArray);
echo "<br>";

//in_array
if(in_array("c",$testArray)) {
    echo "c exists in the array.";
}else {
    echo "c doesn't exist in the array.";
}
echo "<br>";

//implode
$implodedArray = implode(" ",$testArray);
echo $implodedArray;
echo "<br>";

//explode
$explodedArray = explode(" ",$implodedArray);
var_dump($explodedArray);
echo "<br>";
?>