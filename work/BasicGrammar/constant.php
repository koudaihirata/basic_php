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
echo '<br><br>';

// $score = 85;
// $score = 70;
$score = 40;

//if文
if ($score >= 80) {
  echo 'Great!' . PHP_EOL;
} elseif ($score >= 60) {
  echo 'Good!' . PHP_EOL;
} else {
  echo 'OK!' . PHP_EOL;
}
echo '<br><br>';

$score = 60;
$name = 'taguchi';

if ($score >= 50) {
   if ($name === 'taguchi') {
     echo 'Good Job!' . PHP_EOL;
   }
}
echo '<br>';

// && and なおかつ
// || or もしくは
// ! 〜ではない
if ($score >= 50 && $name === 'taguchi') {
  echo 'Good Job!' . PHP_EOL;
}
echo '<br><br>';

$signal = 'red';
// $signal = 'blue';
// $signal = 'green';
// $signal = 'pink';

if ($signal === 'red') {
  echo 'Stop!' . PHP_EOL;
} elseif ($signal === 'yellow') {
  echo 'Caution!' . PHP_EOL;
} elseif ($signal === 'blue'){
  echo 'Go!' . PHP_EOL;
}
echo '<br>';

// switch分
switch ($signal) {
  case 'red':
    echo 'Stop!' . PHP_EOL;
    break;
  case 'yellow':
    echo 'Caution!' . PHP_EOL;
    break;
  case 'blue':
  case 'green':
    echo 'Go!' . PHP_EOL;
    break;
  default:
    echo 'Wrong signal!!' . PHP_EOL;
    break;
}
echo '<br><br>';

// for文
for ($i = 1; $i <= 5; $i++) {
    // echo 'Hello' . PHP_EOL;
    echo "$i - Hello" . PHP_EOL;
  }
echo '<br><br>';

// while do文
$hp = 100;

while ($hp > 0) {
    echo "Your HP: $hp" . PHP_EOL;
    $hp -= 15;
}
do {
    echo "Your HP: $hp" . PHP_EOL;
    $hp -= 15;
  } while ($hp > 0);
  echo '<br><br>';

  // continue break文
  for ($i = 1; $i <= 10; $i++) {
    // if ($i === 4) {
    // if ($i % 3 === 0) {
    //   continue;
    // }
    if ($i === 4) {
      break;
    }
    echo $i . PHP_EOL;
  }