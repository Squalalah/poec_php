<?php

function rangePrime(int $number) : array {
    $tab = array(2);
    for($a = 3; $a <= $number;$a+=2)
    {
        $bool = false;
        for($i = 2; $i < $a; $i++) {
            if ($i == 2 && $a != 3) $bool = false;
            elseif ($a % $i === 0) {
                $bool = false;
                break;
            } else $bool = true;
        }
        if($bool) $tab[] = $a;
    }
    return $tab;
}
$time_start = microtime(true);
//$number = readline();
$number = 50000;
$tableau = rangePrime($number);
$result = implode(' ', $tableau);
echo 'Résultats : '.$result.PHP_EOL;
$time_end = microtime(true);
echo 'Process : '. ($time_end-$time_start);
/*
 * Avec fonction custom amélioré V2, 50000 nombres -> 3.1972930431366 sec d'execution
 * (if $a == 3) pourrait être retiré en commencant la boucle à partir de 3, cependant, 3 est un nombre qui doit être
 * calculé en suivant l'algorithme des nbs. premiers (Contrairement à 2 qui est par défaut nb premier dans les règles).
*/