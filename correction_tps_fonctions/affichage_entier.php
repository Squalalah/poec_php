<?php

/**
 * Le but est de réaliser une fonction "intervalle" permettant
 * l'affichage de nombres suivants des bornes données.
 *
 * Dans un premier temps nous voulons que cette fonction affiche
 * toujours les nombre de 0 à 20.
 *
 * @return void
 */
function intervalle1(): void
{
    for ($i = 0; $i <= 20; $i++) {
        echo $i.PHP_EOL;
    }
}

/**
 * Le but est de réaliser une fonction "intervalle" permettant
 * l'affichage de nombres suivants des bornes données.
 *
 * Nous voulons maintenant pouvoir paramètrer les borne min/max de l'affichage.
 *
 * @param integer $min Le nombre de départ.
 * @param integer $max Le dernier nombre affiché.
 * @return void
 */
function intervalle(int $min = 0, int $max = 20): void
{
    if ($min > $max) {
        trigger_error('Le nombre minimum doit etre inferieur au nombre maximum.');
    }

    for ($i = $min; $i <= $max; $i++) {
        echo $i.PHP_EOL;
    }
}

echo 'Lecture du fichier'.PHP_EOL;

// Import require_once('affichage_entier.php'); // si on est placé dans le même fichier - rendra la fonction disponible dans mon context.

intervalle();
intervalle(1, 3);
intervalle(3, 1);
@intervalle(3, 1); // Ignore le trigger_error.

$txt = @\file_get_contents('no-existing-file.txt');
echo $txt;

echo 'Fin'.PHP_EOL;
