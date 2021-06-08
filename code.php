<?php

// initialiser un compteur de chances.
$chanceRestantes = 5;

// Determiner une valeur aleatoire (valeur a trouver).
$valeur = rand(0, 100);

/** Permet de savoir si la partie est finie (FALSE si : l'utilisateur a trouve le nombre OU il n'a plus de chance disponible). */
$partieEnCours = true;

do {
    // Saisie d'une valeur par l'utilisateur.
    $saisie = readline('Merci de saisir un nombre entre 0 et 100 : ');

    // Traiter la valeur saisie.
    if ($saisie === $valeur) {      // si la valeur est correcte => on gagne la partie
        echo 'Bravo, il fallait bien trouver le nombre '.$valeur.PHP_EOL;
        $partieEnCours = false;
    } else {
        $chanceRestantes--; // decompter les chances (lors d'une erreur)

        if ($saisie > $valeur) {    // la valeur saisie est trop grande => affiche à l'utilisateur que sa valeur est trop grande
            echo $saisie.' est plus grand que la valeur à trouver'.PHP_EOL;
        } else {                    // la valeur saisie est trop petite => affiche à l'utilisateur que sa valeur est trop petite
            echo $saisie.' est plus petit que la valeur à trouver'.PHP_EOL;
        }

        if ($chanceRestantes === 0) {
            echo 'Partie perdue, nous n\'avez plus d\'essai. Le nombre a trouver ete : '.$valeur.PHP_EOL;
            $partieEnCours = false;
        }
    }

} while ($partieEnCours);
