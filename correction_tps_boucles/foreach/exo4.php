<?php
$employes = [
    ['nom' => 'Dupont',     'prenom' => 'JEAN',     'age' => 42],
    ['nom' => 'Bernard',    'prenom' => 'Anne',     'age' => 30],
    ['nom' => 'Kobayashi',  'prenom' => 'Yuki',     'age' => 24],
    ['nom' => 'Igealois',   'prenom' => 'collin',   'age' => 24],
    ['nom' => 'Park',       'prenom' => 'Song-Tae', 'age' => 58]
];

echo 'Liste des employés : '.PHP_EOL;

foreach ($employes as $emp) {
    echo '- '.ucfirst($emp['prenom']).' '. mb_strtoupper($emp['nom']).' a '
        .$emp['age'].' ans'.PHP_EOL;
}
