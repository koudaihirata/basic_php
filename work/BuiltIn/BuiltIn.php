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

// 配列の要素を変更してみよう
$scores = [30, 40, 50];
// 先頭に要素を足す
array_unshift($scores, 10, 20);
// 末尾に要素を足す
array_push($scores, 60, 70);
// $scores[] として 80 としてあげると一番最後に 80 が追加されます。
$scores[] = 80;
// 先頭から要素を削除
array_shift($scores);
// 末尾から要素を削除
array_pop($scores);
print_r($scores);
echo '<br> <br>';

// array_slice()で要素を切り出そう
$scores = [30, 40, 50, 60, 70];
// $partial = array_slice($scores, 2, 3);
$partial = array_slice($scores, 2);
$partial = array_slice($scores, -2);

print_r($scores);
echo '<br>';
print_r($partial);
echo '<br> <br>';

// array_splice()で要素を削除､置換しよう
// array_splice(配置, 位置, 個数) array_splice(配置, 位置, 個数, 消したところに挿入する要素)
$scores = [30, 40, 50, 60, 70, 80];
// array_splice($scores, 2, 3);
// array_splice($scores, 2, 3, 100);
array_splice($scores, 2, 0, [100, 101]);

print_r($scores);
echo '<br> <br>';

// 配列をソート､シャッフルしてみよう
$scores = [40, 50, 20, 30];
// 値を小さい順に並び替え
sort($scores);
// rsort() とすると、値を大きい順に並び替え
print_r($scores);
// 実行するたびに値をシャッフルしてくれる
shuffle($scores);
print_r($scores);

$picked = array_rand($scores, 2);
echo $scores[$picked[0]] . PHP_EOL;
echo $scores[$picked[1]] . PHP_EOL;
echo '<br> <br>';

// 配列の値を集計してみよう
// $scores = array_fill(0, 5, 10);
// $scores = range(1, 10);
$scores = range(1, 10, 2);

print_r($scores);

echo array_sum($scores) . PHP_EOL;
echo max($scores) . PHP_EOL;
echo min($scores) . PHP_EOL;
echo array_sum($scores) / count($scores) . PHP_EOL;
echo '<br> <br>';

// 配列の連結､差､共通項の計算をしよう
$a = [3, 4, 8];
$b = [4, 8, 12];

// $merged = array_merge($a, $b);
// $merged = [...$a, ...$b];
print_r($merged);

$uniques = array_unique($merged);
print_r($uniques);
// array_diff($a, $b) の場合は $a にある要素から $b にある要素を引いてくれる
$diff1 = array_diff($a, $b);
print_r($diff1); // [3]
// array_diff($b, $a) ですが、 $b から $a にある要素を引く
$diff2 = array_diff($b, $a);
print_r($diff2); // [12]
// intersectは、共通の要素を取り出す
$common = array_intersect($a, $b);
print_r($common); // [4, 8]
echo '<br> <br>';

// array_map()を使ってみよう
$prices = [100, 200, 300];

$newPrices = array_map(
  function ($n) { return $n * 1.1; },
//   fn($n) => $n * 1.1,
  $prices
);

print_r($newPrices);