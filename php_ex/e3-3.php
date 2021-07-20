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

    <?php
    //str_replace(),str_pad(),str_repeat()
    $str06 = '正規表達式';
    echo str_replace('達', '了', $str06) . '<br>';
    echo str_pad('不要', 30, '阿') . '<br>';
    echo 'y' . str_repeat('e', 5);
    ?>
    <hr>
    <?php
    //strtolower(),strtoupper
    $str07_1 = 'HELLO';
    $str07_2 = 'world';
    echo strtolower($str07_1) . strtoupper($str07_2);
    ?>

    <hr>
    <?php
    //md5()
    $strOrigin = 'T2st@localhost';
    echo '原始資料：' . $strOrigin . '<br>';
    echo 'md5()加密後：' . md5($strOrigin) . '<br>';

    $strOrigin = 'Test@localhost';
    echo '修改資料後：' . $strOrigin . '<br>';
    echo 'md5()加密後：' . md5($strOrigin) . '<br>';

    $strOrigin = 'T2st@localhost';
    echo '原始資料：' . $strOrigin . '<br>';
    echo 'md5()加密後：' . md5($strOrigin) . '<br>';
    ?>

    <hr>
    <?php
    //sha1()
    $strOrigin = 'T2st@localhost';
    echo '原始資料：' . $strOrigin . '<br>';
    echo 'sha1()加密後：' . sha1($strOrigin) . '<br>';

    $strOrigin = 'Test@localhost';
    echo '修改資料後：' . $strOrigin . '<br>';
    echo 'sha1()加密後：' . sha1($strOrigin) . '<br>';

    $strOrigin = 'T2st@localhost';
    echo '原始資料：' . $strOrigin . '<br>';
    echo 'sha1()加密後：' . sha1($strOrigin) . '<br>';
    ?>

    <hr>
    <?php
    //銷毀，釋放變數
    unset($str01, $str02, $str03, $str04_1, $str04_2, $arr03);
    ?>

</body>

</html>