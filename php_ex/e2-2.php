<?php

$arrName = ['AA', 'BB', 'CC', 'DD'];
echo '<div style="color:green;">' . $arrName[0] . '</div><br>';
echo "<div style='color:green;'>" . $arrName[1] . '</div><br>';
echo "<div style='color:green;'>" . $arrName[2] . '</div><br>';
echo "<div style='color:green;'>" . $arrName[3] . '</div><br>';

echo "<br><br>";
$obj = ["name" => "AA", "age" => 17];
echo "姓名：" . $obj['name'] . " 年齡 " . $obj['age'];
