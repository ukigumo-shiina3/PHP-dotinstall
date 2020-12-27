<!-- continue(ループをスキップ),break(ループを途中で抜ける) -->
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
}

// 関数(同じような処理を書く場合)
<?php

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

// 引数
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

// return
<?php

function sum($a, $b ,$c)
{
  // echo $a + $b + $c .PHP_EOL;
  return $a + $b + $c .PHP_EOL;
  echo 'Here' . PHP_EOL;
}

// sum(100,200,300); //600
// sum(300,400,500); //1200
echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL; // 1800

// スコープ
<?php

$rate = 1.1; //グローバルスコープ(関数外)

function sum($a, $b, $c)
{
  // global $rate; //関数の外で$rateが指定されたと宣言
  $rate = 1.08 //ローカルスコープ（関数内)
  return ($a + $b + $c) * $rate;
}

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL; // 1944