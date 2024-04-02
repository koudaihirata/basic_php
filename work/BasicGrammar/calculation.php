<?php

$title = '基礎文法 - 四則演算 ';

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

echo 10 + 3 . PHP_EOL; // 13
echo 10 - 3 . PHP_EOL; // 7
echo 10 * 3 . PHP_EOL; // 30
echo 10 / 3 . PHP_EOL; // 3.3333...

echo 10 % 3 . PHP_EOL; // 1
echo 10 ** 3 . PHP_EOL; // 1000

echo 2 + 10 * 3 . PHP_EOL; // 32
echo (2 + 10) * 3 . PHP_EOL; // 36

echo 2 + '3' . PHP_EOL; // 5

$price = 500;

// $price = $price + 100;
$price += 100; // 600
$price *= 100; // 60000

$price++; // 60001
$price--; // 60000

echo $price . PHP_EOL;
