<?php

// EXERCICE 1
function myRange(int $a = null, int $b = null) {

    if($a == null || $b == null)
    {
        for($i = 0; $i <= 20; $i++)
        {
            echo $i;
        }
    }
    else if($a < $b)
    {
        for($i = $a;$i <= $b; $i++)
        {
            echo $i;
        }
    }
}
myRange();
echo PHP_EOL;
myRange(2,4);
echo PHP_EOL;

// EXERCICE 2
function myConcat(string $a, string $b) : string {
    return $a .= $b;
}
echo myConcat('Hello ', 'World!').PHP_EOL;


// EXERCICE 3
function mySomme(array $array) : int {
    $total = 0;
    foreach($array as $value) {
        if(is_numeric($value)) $total += $value;
    }
    return $total;
}
echo mySomme(array(2, 3, 1, 5, 'salut')).PHP_EOL;

function mySecondeSomme(int...$nombre) : int {
    $total = 0;
    foreach($nombre as $value)
    {
        $total += $value;
    }
    return $total;
}
echo mySecondeSomme(0,1,10,11).PHP_EOL;
echo mySecondeSomme(1,2). PHP_EOL;
?>
