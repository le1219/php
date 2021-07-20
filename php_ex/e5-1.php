<?php
//
$a = 5;
if ($a > 0) echo '$a變數的值是正數';
echo "<br>";
if ($a > 0) {
    echo '$a 變數為大於0';
}

echo "<hr>";

$b = -5;
if ($b > 0) {
    echo '$b 大於0';
} else {
    echo '小於0';
}
echo "<hr>";

$score = 85;
if ($score >= 60 && $score < 70) {
    echo '3';
} elseif ($score >= 70 && $score < 80) {
    echo "2";
} elseif ($score >= 80 && $score <= 100) {
    echo "1";
} else {
    echo "bye";
}
