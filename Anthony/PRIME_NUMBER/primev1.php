<?php
$time_start = microtime(true);
$number = 50000;
$tableau = range(2, $number);
$result = '';
for($i = 2; $i <= $number/2;$i++) {
    foreach($tableau as $key => $value)
    {
        if($value === $i) continue;
        if($value % $i === 0) unset($tableau[$key]);
    }
}

foreach($tableau as $value)
{
    $result .= $value.' ';
}
echo 'Résultats : '.$result.PHP_EOL;
$time_end = microtime(true);
echo 'Process : '. ($time_end-$time_start);
//50000 nombres -> 5.410933971405 sec d'execution