<?php


echo 'Veuillez entrer le nombre maximum pour calculer les nombres premiers';
$number = readline();
$tableau = range(6, $number);
$result = '2 3 5';

for($i = 2; $i <= 5; $i++) {
    foreach($tableau as $key => $value) {
        if($value % $i == 0) unset($tableau[$key]);
    }
}
foreach($tableau as $value) {
    $result .= ' '.$value;
}
echo 'Résultats : '.$result;


?>

