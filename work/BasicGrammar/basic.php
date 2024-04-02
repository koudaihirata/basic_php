<?php

$title = '基礎文法 - ';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>晃大のphpチュートリアルサイト</title>
    <link rel="icon" href="../favicon.ico">
    <meta name="description" content="晃大のphpチュートリアルサイト">
</head>

<?php

// comment
# comment
/*
comment
comment
*/

// $name = '晃大';
$name = '平田晃大';

// echo 'こんばんは、晃大です。' . PHP_EOL;
// echo 'hi! 広大です。' . PHP_EOL;

echo 'こんばんは、' . $name . 'です。' . PHP_EOL;
echo 'hi!' . $name . 'です。' . PHP_EOL;
