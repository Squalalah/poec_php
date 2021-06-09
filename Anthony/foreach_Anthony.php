<?php

echo PHP_EOL;

$tableau = [
    'clef' => 'valeur',
    -1 => 111,
    5,
    'salut'
];

// EXERCICE 1

foreach($tableau as $i) {
    echo $i. ' ';
}
echo PHP_EOL;
// EXERCICE 2

foreach($tableau as $key => $value) {
    echo $key . ' => ' . $value .' / ';
}
echo PHP_EOL;
// EXERCICE 3

$total = 0;

foreach($tableau as $i)
{
    if(is_numeric($i)) $total += $i;
}
echo $total;

echo PHP_EOL;


// EXERCICE 4

$employes = [
    ['nom' => 'Dupont', 'prenom' => 'JEAN', 'age' => 42],
    ['nom' => 'Bernard', 'prenom' => 'Anne', 'age' => 30],
    ['nom' => 'Kobayashi', 'prenom' => 'Yuki', 'age' => 24],
    ['nom' => 'Igealois', 'prenom' => 'collin', 'age' => 24],
    ['nom' => 'Park', 'prenom' => 'Song-Tae', 'age' => 58]
];

foreach($employes as $key => $value) {
    echo $value['nom'] . ' ' . $value['prenom'] . ' a ' . $value['age'] . ' ans.'. PHP_EOL;
}

?>
