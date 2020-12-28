<!-- 無名関数(クロージャー) -->
<?php

// function sum($a, $b, $c)
// {
//   return $a + $b + $c;
// }

$sum = function ($a + $b, $c) {  //関数を値として代入する場合はfunctionの後にスペースを入れる
  return $a + $b + $c;
}; //普通の関数は「;」不要だが、値として代入する場合はいる

echo $sum(100, 300, 500) . PHP_EOL;

//条件演算子
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

//型付け(予期しない値を弾く)
<?php

declare(strict_types=1); //厳密に型をチェック、「'4'」をPHPが勝手に数値に変換することを防ぐ

function showInfo(string $name, int $score): void //引数の前に型を指定, 返り値の指定は「:」の後、返り値がない場合はvoidを使う
{
  echo $name . ': ' . $score . PHP_EOL;
}

showInfo('taguchi', 40);

//条件演算子(nullの判別)
<?php

declare(strict_types=1);

function getAward(?int $score): ?string //「?」をつけるとnullか?その型か(stringなど)か判別できる
{
  return $score >= 100 ? 'Gold Medal' : null;
}

echo getAward(150) . PHP_EOL;
echo getAward(40) . PHP_EOL;