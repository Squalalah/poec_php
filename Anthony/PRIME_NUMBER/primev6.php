<?php
function rangePrime(int $number) : array {
    $tab = array(2);
    for($a = 3; $a <= $number;$a+=2) $tab[] = $a;
    for($b = 3; $b < sqrt($number);$b++)
    {
        foreach($tab as $key => $value)
        {
            if($value%$b == 0 && $value != $b) unset($tab[$key]);
        }
    }
    return $tab;
}
$time_start = microtime(true);
$number = 50000;
$tableau = rangePrime($number);
$result = implode(' ', $tableau);
echo 'Résultats : '.$result.PHP_EOL;
$time_end = microtime(true);
echo 'Process : '. ($time_end-$time_start);
/*
 * 50.000 nombres -> 0.063581943511963 sec d'execution
 * 100.000 nombres -> 0.17518782615662 sec d'execution
 * Conclusion, le script 'primev1' était très proche de la solution pour calculer énormément de nombre premiers
*/