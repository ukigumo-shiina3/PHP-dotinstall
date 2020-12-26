<!-- switch文 -->
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

// for文(特定の処理を繰り返すループ処理)
<?php 

for ($i = 1; $1 <= 5; $1++) {
     // echo 'Hello' . PHP_EOL;
    echo "$i - Hello" . PHP_EOL;
}

// while文(ある条件が満たされている間、特定の処理を繰り返す)

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