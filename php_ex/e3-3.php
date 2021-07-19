<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //n12br()
    $str01 = "小明:「我重要嗎?」\n 小美:「再重都要。」";
    echo nl2br($str01);

    ?>
    <hr>

    <?php
    //trim去除兩邊空白 ltrim去除左空格 rtrim去除右邊空格
    $str02 = "MISSYOU SO MUCH..";
    echo trim($str02) . '\n';
    echo ltrim($str02) . '\n';
    echo rtrim($str02) . '\n';
    ?>
    <hr>

    <?php
    //explode() print_r()
    $str03 = '老,爺,餓,了';
    $arr03 = explode(",", $str03);
    echo $arr03[0] . $arr03[1] . $arr03[2] . $arr03[3] . "<br>";
    print_r($arr03);
    ?>

    <hr>

    <?php
    //implode() join()
    $str04_1 = implode("~", $arr03);
    echo $str04_1 . "<br>";
    $str04_2 = join("...", $arr03);
    echo $str04_2 . "<br>";
    ?>

    <hr>

    <?php
    //strlen(),mb_strlen(),strops(),mb_strops(),substr(),substr()
    $str05_1 = "abcdefg";
    $str05_2 = "老爺餓了";

    echo strlen($str05_1) . "<br>";
    echo mb_strlen($str05_2) . "<br>";
    echo strpos($str05_1, "c") . "<br>";
    echo mb_strpos($str05_2, "了") . "<br>";
    echo substr($str05_1, 3, 5) . "<br>";
    echo mb_substr($str05_2, 2, 3) . "<br>";

    ?>


</body>

</html>