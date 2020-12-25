<?php

$name = 'taguchi';

echo 'Hello ' . $name . PHP_EOL;   
echo 'Hi ' . $name . PHP_EOL;

// $text = <<<'EOT' // nowdoc
// $text = <<<"EOT" // heredoc
$text = <<<EOT
hello! $name
    this is looooong
text!

EOT;

echo $text;