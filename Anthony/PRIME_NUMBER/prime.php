<?php
echo 'Veuillez entrer le nombre maximum pour calculer les nombres premiers';
$number = readline();
$tableau = range(2, $number);
$result = '';
$time_start = microtime(true);
for($i = 2; $i <= $number/2;$i++) {
    foreach($tableau as $key => $value)
    {
        if($value === $i) continue;
        if($value % $i === 0) unset($tableau[$key]);
    }
}
$result = implode(' ', $tableau);
echo 'Résultats : '.$result.PHP_EOL;
