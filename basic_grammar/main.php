<!-- ヒアドキュメント(改行や字下げの保持) -->
<?php

$name = 'taguchi';

$text = <<<EOT
hello! $name
    this is looooong
text!

EOT;

echo $text; 

// 変数を使った演算
<?php

$price = 500;

$price += 100; #600
$price *= 100; #60000

$price++; #60001
$price--; #60000

echo $price . PHP_EOL;

// 定数(define,const)
<?php
define('NAME', 'taguchi')
echo NAME . PHP_EOL;

const NAME = 'dotinstall';
echo NAME . PHP_EOL;

// キャスト(データ型の変更)
<?php

$x = (float)5; //string→floatに変更
$y = (string)3.2; //string→floatに変更

var_dump($x);
var_dump($y);

// if文
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