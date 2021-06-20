<?php

function rangePrime(int $number) : array {
    $tab = array(2);
    for($a = 3; $a < $number;$a++)
    {
        $tab[] = $a;
    }
    return $tab;
}

$time_start = microtime(true);
//$number = readline();
$number = 50000;
$tableau = rangePrime($number);

for($i = 2; $i <= $number/2;$i++) {
    foreach($tableau as $key => $value)
    {
        if($value === $i) continue;
        if($value % $i === 0) unset($tableau[$key]);
    }
}

$result = implode(' ', $tableau);
echo 'Résultats : '.$result.PHP_EOL;
$time_end = microtime(true);
echo 'Process : '. ($time_end-$time_start);
//Avec fonction custom, 50000 nombres -> 5.033191919326 sec d'execution