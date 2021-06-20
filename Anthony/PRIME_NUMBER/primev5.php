<?php

function rangePrime(int $number) : array {
    $tab = array(2);
    for($a = 3; $a <= $number;$a+=2)
    {
        $bool = false;
        for($i = 3; $i < $a/2; $i++) {
            if ($a % $i === 0) {
                $bool = false;
                break;
            } else $bool = true;
        }
        if($a == 3 ||$a == 5 || $bool) $tab[] = $a;
    }
    return $tab;
}
$time_start = microtime(true);
$number = 0000;
$tableau = rangePrime($number);
$result = implode(' ', $tableau);
echo 'Résultats : '.$result.PHP_EOL;
$time_end = microtime(true);
echo 'Process : '. ($time_end-$time_start);
/*
 * Avec fonction custom amélioré V2, 50000 nombres -> 1.8105850219727 sec d'execution
 * 100.000 nombres -> 8.6114201545715 sec d'execution
 *
*/