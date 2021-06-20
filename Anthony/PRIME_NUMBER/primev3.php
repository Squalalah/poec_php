<?php
function rangePrime(int $number) : array {
    $tab = array(2);
    for($a = 3; $a <= $number;$a+=2)
    {
        $tab[] = $a;
    }
    return $tab;
}
$time_start = microtime(true);
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
//Avec fonction custom amélioré, 50000 nombres -> 4.972277879715 sec d'execution