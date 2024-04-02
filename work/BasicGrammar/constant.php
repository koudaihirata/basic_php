<?php

$title = '基礎文法 - 定数 ';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>晃大のphpチュートリアルサイト</title>
    <link rel="icon" href="../favicon.ico">
    <meta name="description" content="晃大のphpチュートリアルサイト">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<?php

// $name = 'taguchi';
// $name = 'dotinstall';

// NAMEにtaguchiを入れる
// define('NAME', 'taguchi');
// define('NAME', 'dotinstall');
// echo NAME . PHP_EOL;

const NAME = 'taguchi';
// const NAME = 'dotinstall';
echo NAME . PHP_EOL;
echo '<br><br>';

$a = 'hello';
$b = 10;
$c = -1.3;
$d = null;
$e = true;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
echo '<br>';

$a = (float)10;
$b = (string)1.3;

var_dump($a);
var_dump($b);