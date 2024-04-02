<?php
$title = '基礎文法 - 変数 ';

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

//変数
$name = '平田晃大';

echo 'こんばんは、' . $name . 'です。' . PHP_EOL;
echo 'hi!' . $name . 'です。' . PHP_EOL;
echo "It's Sunday. Hello " . $name . PHP_EOL;
echo "It's Sunday. Hello $name" . PHP_EOL;

echo '<br>';
echo '<br>';
//変数の中にテキストを入れる
// $text = <<<'EOT' // nowdoc
// $text = <<<"EOT" // heredoc
$text = <<<EOT
  hello! $name
    this is looooong
  text!
  
  EOT;

echo $text;
echo '<br> <br>';

// 関数の処理
function showAd() 
{
  echo '----------' . PHP_EOL;
  echo '--- Ad ---' . PHP_EOL;
  echo '----------' . PHP_EOL;
}

showAd();
echo 'Tom is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd();
echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd();
echo '<br> <br>';

// 引数
function sAd($message = 'Ad')  // 仮引数
{
  echo '----------' . PHP_EOL;
  echo '--- ' . $message . ' ---' . PHP_EOL;
  echo '----------' . PHP_EOL;
}

sAd('Header Ad'); // 実引数
echo 'Tom is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
// showAd('Ad');
sAd();
echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
sAd('Footer Ad');
echo '<br> <br>';

// return
function sum($a, $b, $c)
{
  // echo $a + $b + $c . PHP_EOL;
  return $a + $b + $c;
  echo 'Here' . PHP_EOL;
}

// sum(100, 200, 300); // 600
// sum(300, 400, 500); // 1200

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL; // 1800
echo '<br> <br>';

// グローバルスコープの使い方
$rate = 1.1; // グローバルスコープ

function aaa($a, $b, $c)
{
  // global $rate;
  $rate = 1.08; // ローカルスコープ
  return ($a + $b + $c) * $rate;
}

echo aaa(100, 200, 300) + aaa(300, 400, 500) . PHP_EOL; // 1944
echo '<br> <br>';

// 無名関数の使い方
$sum = function ($a, $b, $c) { // 無名関数
  return $a + $b + $c;
};

echo $sum(100, 300, 500) . PHP_EOL;
echo '<br> <br>';

// 条件演算子
function iii($a, $b, $c) 
{
  $total = $a + $b + $c;
  
  // if ($total < 0) {
  //   return 0;
  // } else {
  //   return $total;
  // }
  return $total < 0 ? 0 : $total;
}

echo iii(100, 300, 500) . PHP_EOL; // 900
echo iii(-1000, 300, 500) . PHP_EOL; // 0
echo '<br> <br>';

// 引数の型を指定
// declare(strict_types=1);

function showInfo(string $name, int $score): void
{
  echo $name . ': ' . $score . PHP_EOL;
}
showInfo('taguchi', 40);
// showInfo('taguchi', 'dotinstall');
// showInfo('taguchi', '4');
echo '<br> <br>';

