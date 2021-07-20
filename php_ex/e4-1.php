<?php
$myVar01 = 6;
echo $myVar01;

echo "<hr>";

//算數運算子
$myVar02 = 3 + 7;
$myVar03 = 6 + 5;
$myVar04 = 7 % 3;
echo "myVar02 = {$myVar02} , myVar03 = {$myVar03} , myVar04 = {$myVar04}";

echo '<hr>';

//關係運算
echo (1 == "1") ? '1 == "1" is true' : '1 == "1" is false';
echo '<br>';
echo (1 === "1") ? '1 === "1" is true' : '1 === "1" is false';
echo '<br>';

echo (5 > 3) ? '5>3 is true' : '5>3 is false';
echo '<br>';
echo (2 < 6) ? '2<6 is true' : '2<6 is false';
