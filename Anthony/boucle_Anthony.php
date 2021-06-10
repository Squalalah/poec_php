<?php

//exercice 1

for($i = 0; $i <  20;$i++) {
        echo $i;
    }
echo PHP_EOL;

//exercice 2

for($i = 1; $i <= 100; $i++) {
    echo $i;
}
echo PHP_EOL;

//exercice 3

for($i = 1; $i <= 10; $i++) {
    echo $i.'² = ' . $i*$i . ' / ';
}

echo PHP_EOL;

//exercice 4

for($i = 1; $i <= 10; $i++) {
    $i++;
    echo $i. ' '. PHP_EOL;
}

echo PHP_EOL;

//exercice 5

for($i = 0; $i < 50; $i++) {
    echo 'e';
}

echo PHP_EOL;

//exercice 6

$ask = fopen('php://stdin', 'r');
echo 'Merci d\'entrer la phrase';
$sentenceChoice = trim(fgets($ask));
echo 'Combien de fois voulez-vous qu\'on répète cette phrase ?';
$countChoice = trim(fgets($ask));

for($i = 0; $i < $countChoice; $i++) {
    echo $sentenceChoice . ' ';
}

