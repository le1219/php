<?php
$a = true;
$b = true;
echo ($a && $b) ? '$a&&$b is true' : '$a&&$b is false';

echo '<br>';
$a = true;
$b = false;
echo ($a || $b) ? '$a||$b is true' : '$a||$b is false';

echo '<br>';
$c = true;
echo (!$c) ? '$c is true' : '$c is false'; //false

echo '<br>';
$x1 = 10;
$y1 = 5;
$x1 += $y1;
echo $x1; //15

echo  '<br>';

$x2 = 10;
$y2 = 5;
$x2 /= $y2;
echo $x2; //2

echo  '<br>';
//
$y = 1;
$y++;
echo $y;

echo  '<hr>';
$z = 9;
$z--;
echo $z;
