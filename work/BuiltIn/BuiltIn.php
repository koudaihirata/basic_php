<?php

$title = 'ビルトイン関数 - ';

?>
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>晃大のphpチュートリアルサイト</title>
    <link rel="icon" href="../favicon.ico">
</head>

<?php

// sprintf()を使ってみよう
$name = 'Apple';
$score = 32.246;

$info = "[$name][$score]";
echo $info . PHP_EOL;
echo '<br>';
// 文字列だったら %s 、整数だったら %d 、浮動小数点数だったら %f
// 埋め込みたい値をカンマ区切りで渡せばいい
$info = sprintf("[%15s][%10.2f]", $name, $score);
echo $info . PHP_EOL;
$info = sprintf("[%-15s][%010.2f]", $name, $score);
echo $info . PHP_EOL;
echo '<br>';
printf("[%-15s][%010.2f]" . PHP_EOL, $name, $score);
echo '<br> <br>';

// 文字列を扱う関数を見ていこう
$input = ' dot_taguchi  ';
$input = trim($input);
echo '<br>';
//trim() という関数を使ってあげれば前後の空白や改行を除去することができる
echo strlen($input) . PHP_EOL;
echo '<br>';
// $input の中から _ が何番目かを教えてくれる
echo strpos($input, '_') . PHP_EOL;
echo '<br>';
// _を-に変換
$input = str_replace('_', '-', $input);
echo $input . PHP_EOL;
echo '<br> <br>';

// マルチバイト文字列を扱ってみよう
$input = ' こんにちは  ';
$input = trim($input);
// strlen() や strpos() で日本語を扱うにはマルチバイトに対応した別の関数を使う必要があって、 mb_strlen() 、 mb_strpos() を使ってあげる必要があります。
echo mb_strlen($input) . PHP_EOL; // 5
echo mb_strpos($input, 'に') . PHP_EOL; // 2

$input = str_replace('にち', 'ばん', $input); // こんばんは
echo $input . PHP_EOL;
echo '<br> <br>';

// 固定長データを扱ってみよう
// substr(文字列, 位置, 桁数)　substr_replace(文字列, 置換文字列, 位置, 桁数)
$input = '20200320Item-A  1200';
// Item-AをItem-Bに変更
$input = substr_replace($input, 'Item-B  ', 8, 8);

$date = substr($input, 0, 8);
$product = substr($input, 8, 8);
// $amount = substr($input, 16, 4);
$amount = substr($input, 16);

echo $date . PHP_EOL;
echo $product . PHP_EOL;
echo $amount . PHP_EOL;
echo number_format($amount) . PHP_EOL;
echo '<br> <br>';

// 文字列を検索､置換してみよう
$input = 'Call us at 03-3001-1256 or 03-3015-3222';
$pattern = '/\d{2}-\d{4}-\d{4}/';

// preg_match($pattern, $input, $matches);
preg_match_all($pattern, $input, $matches);
print_r($matches);
echo '<br>';
$input = preg_replace($pattern, '**-****-****', $input);
echo $input . PHP_EOL;$input = 'Call us at 03-3001-1256 or 03-3015-3222';
echo '<br> <br>';

// 文字列と配列を相互に変換してみよう
$d = [2020, 11, 15];
echo "$d[0]-$d[1]-$d[2]" . PHP_EOL;
echo implode('-', $d) . PHP_EOL;
echo '<br>';
$t = '17:32:45';
print_r(explode(':', $t));
echo '<br> <br>';

// 数学系の関数を使ってみよう
$n = 5.6283;

// 切り上げ
echo ceil($n) . PHP_EOL; // 6
// 切り捨て
echo floor($n) . PHP_EOL; // 5
// 整数で四捨五入
echo round($n) . PHP_EOL; // 6
// 小数点以下二桁になるように四捨五入
echo round($n, 2) . PHP_EOL; // 5.63
// 乱数
echo mt_rand(1, 6) . PHP_EOL;
// 最大値や最小値を求める関数
echo max(3, 9, 4) .PHP_EOL;
echo min(3, 9, 4) .PHP_EOL;
// 円周率
echo M_PI . PHP_EOL;
// 2 の平方根
echo M_SQRT2 . PHP_EOL;
echo '<br> <br>';

