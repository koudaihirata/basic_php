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