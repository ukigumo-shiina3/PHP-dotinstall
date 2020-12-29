<!-- 7. ヒアドキュメント(長めのテキストを表現) -->
<?php

$name = 'taguchi';

echo 'Hello ' . $name . PHP_EOL;   
echo 'Hi ' . $name . PHP_EOL;

// $text = <<<'EOT' // nowdoc(変数を展開しない書き方)
// $text = <<<"EOT" // heredoc(変数を展開する書き方)
$text = <<<EOT
hello! $name
    this is looooong
text!
EOT;

echo $text; 

// 9. 変数を使った演算
<?php

$price = 500;

$price += 100; #600
$price *= 100; #60000

$price++; #60001
$price--; #60000

echo $price . PHP_EOL;

// 10. 定数(define,const)
<?php
define('NAME', 'taguchi')
echo NAME . PHP_EOL;

const NAME = 'dotinstall';
echo NAME . PHP_EOL;

// 12. キャスト(データ型の変更)
<?php

$x = (float)5; //string→floatに変更
$y = (string)3.2; //string→floatに変更

var_dump($x);
var_dump($y);

// 13. if文
<?php
// $score = 85;
// $score = 70;
$score = 40;

if ($score >= 80) {
    echo 'Great!' . PHP_EOL;
} elseif ($score >= 60) {
    echo 'Good!' . PHP_EOL;
} else {
    echo 'OK!' . PHP_EOL;
} 

// 16. switch文
<?php

$signal = 'pink';

switch ($signal) {
    case 'red': #比較する値の後はコロン
        echo 'Stop' . PHP_EOL;
        break; #処理を終える時必ず記述
    case 'yellow':
        echo 'Caution' . PHP_EOL;
        break;
    case 'blue':
    case 'green': #blue or yellowの場合
        echo 'Go' . PHP_EOL;
        break;
    default: #どの条件にも当てはまらなかった場合
    echo 'Wrong signal!!' . PHP_EOL;
    break;
}

// 18. for文(特定の処理を繰り返すループ処理)
<?php 

for ($i = 1; $1 <= 5; $1++) {
     // echo 'Hello' . PHP_EOL;
    echo "$i - Hello" . PHP_EOL;
}

// 19. while文(ある条件が満たされている間、特定の処理を繰り返す)
<?php
$hp = 100;

while ($hp > 0) {
  echo "Your HP: $hp" . PHP_EOL;
  $hp -= 15;
}

// do-while(とりあえず一回は実行して条件次第でまた実行)
<?php

$hp = -50;

do {
  echo "Your HP: $hp" . PHP_EOL;
  $hp -= 15;
} while ($hp > 0); 

// 20. continue(ループをスキップ),break(ループを途中で抜ける)
<?php

for ($i = 1; $i <= 10; $i++) {
  // if ($i === 4) {
  // if ($i % 3 === 0) {
  //   continue;
  // }
if ($i === 4) {
break;
}
echo $i . PHP_EOL;

// 21. 関数(同じような処理を書く場合)
<?php

function showAd() 
{
  echo '----------' . PHP_EOL;
  echo '--- Ad ---' . PHP_EOL;
  echo '----------' . PHP_EOL;

  showAd();
  echo 'Tom is great!' . PHP_EOL;
  echo 'Bob is great!' . PHP_EOL;
  showAd();
  echo 'Steve is great!' . PHP_EOL;
  echo 'Bob is great!' . PHP_EOL;
  showAd();
      
// 22. 引数
<?php

function showAd($message = 'Ad') //仮引数 ($message = 'Ad')は何も引数を渡さなかった時の値

{
  echo '----------' . PHP_EOL;
  echo '--- ' . $message . ' ---' . PHP_EOL;
  echo '----------' . PHP_EOL;
}

showAd('Header Ad'); //実引数
echo 'Tom is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd('Ad');
showAd()
echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd('Footer Ad');

// 23. return
<?php

function sum($a, $b ,$c)
{
  // echo $a + $b + $c .PHP_EOL;
  return $a + $b + $c .PHP_EOL;
  echo 'Here' . PHP_EOL;

// sum(100,200,300); //600
// sum(300,400,500); //1200
echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL; // 1800

// 24. スコープ
<?php

$rate = 1.1; //グローバルスコープ(関数外)

function sum($a, $b, $c)
{
  // global $rate; //関数の外で$rateが指定されたと宣言
  $rate = 1.08 //ローカルスコープ（関数内)
  return ($a + $b + $c) * $rate;
}

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL; // 1944 


// 25. 無名関数(クロージャー) 
<?php

// function sum($a, $b, $c)
// {
//   return $a + $b + $c;
// }

$sum = function ($a + $b, $c) {  //関数を値として代入する場合はfunctionの後にスペースを入れる
  return $a + $b + $c;
}; //普通の関数は「;」不要だが、値として代入する場合はいる

echo $sum(100, 300, 500) . PHP_EOL;

//26. 条件演算子
<?php

function sum($a, $b, $c) 
{
  $total = $a + $b + $c;

  // if ($total < 0) {
  //   return 0;
  // } else {
  //   return $total;
  // }
  return $total < 0 ? 0 : $total; // 「条件 ? 値(true) : 値(false)」
}

echo sum(100, 300, 500) . PHP_EOL; // 900
echo sum(-1000, 300, 500) . PHP_EOL; // 0

//27. 型付け(予期しない値を弾く)
<?php

declare(strict_types=1); //厳密に型をチェック、「'4'」をPHPが勝手に数値に変換することを防ぐ

function showInfo(string $name, int $score): void //引数の前に型を指定, 返り値の指定は「:」の後、返り値がない場合はvoidを使う
{
  echo $name . ': ' . $score . PHP_EOL;
}

showInfo('taguchi', 40);

//28. 条件演算子(nullの判別)
<?php

declare(strict_types=1);

function getAward(?int $score): ?string //「?」をつけるとnullか?その型か(stringなど)か判別できる
{
  return $score >= 100 ? 'Gold Medal' : null;
}

echo getAward(150) . PHP_EOL;
echo getAward(40) . PHP_EOL;

//30. 配列のキー指定
<?php

$scores = [
  'first'  => 90, 
  'second' => 40, 
  'third'  => 100,
];

// var_dump($scores); //要素数や値の型を表示
// print_r($scores); //print_rの方が字下げをしてすっきり表示

echo $scores['third'] . PHP_EOL;

// 31. foreach(配列の全ての操作に対して何らかの処理)
<?php

$scores = [
  'first'  => 90, 
  'second' => 40, 
  'third'  => 100,
];

// foreach ($scores as $value) {
// foreach ($scores as $score) {
//   echo $score . PHP_EOL;
// }

foreach ($scores as $key => $score) {
  echo $key . ' - ' . $score . PHP_EOL;
}

// 32. 配列の要素を展開
<?php

$moreScores = [
  55,
  72,
  'perfect',
  [90, 42, 88],
];

$scores = [
  90,
  40,
  ...$moreScores, //「...」配列の中に配列を埋め込む
  100,
];

// print_r($scores);

echo $scores[5][2] . PHP_EOL;

// 33. 可変長引数(渡された全ての引数を配列にして代入)
<?php

// function sum($a, $b, $c)
function sum(...$numbers)
{
  // return $a + $b + $c;
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total;
}

echo sum(1, 3, 5) . PHP_EOL;
echo sum(4, 2, 5, 1) . PHP_EOL;

// 34. 複数の返り値を受け取る
function getStats(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return [$total, $total / count($numbers)];
}

// print_r(getStats(1, 3, 5));

// list($sum, $average) = getStats(1, 3, 5);
[$sum, $average] = getStats(1, 3, 5);

echo $sum . PHP_EOL;
echo $average . PHP_EOL;