<?php
$names = [
    'Battle Block Theater',
    'Call Of Duty',
    'Fifa'
];

if ($_GET['nom']) {
    // $names = \array_filter($names, function ($e) { return \mb_stripos($e, $_GET['nom']) !== false; });

    $temp = [];

    foreach ($names as $e) {
        if (\mb_stripos($e, $_GET['nom']) !== false) {
            \array_push($temp, $e);
        }
    }

    $names = $temp;
    unset($temp);
}
