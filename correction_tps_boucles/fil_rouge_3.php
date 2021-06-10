<?php

// Ensemble de mots disponibles.
$dico = ['kayak', 'rouge', 'trois'];
// Choix du mot a trouver.
$aTrouver = $dico[array_rand($dico)];
/**
 * Initialisation du compteur de chances (on perds si ce nombre atteint 0).
 */
$nbChances = 5;
$etat = preg_replace('/[\wàéèëïçùûâ]/', '_', $aTrouver);
// Autre initialisation possible (avec une boucle).
// Initialisation possible.
// $etat = '';
// for ($i = 0; $i < strlen($aTrouver); $i++) {
//     if ($aTrouver[$i] === '-') {
//         $etat .= '-';
//     } else {
//         $etat .= '_';
//     }
// }
$historiqueTentatives = [];


do {
    echo 'L\'état actuel : '.$etat.PHP_EOL;

    echo 'Il vous reste '.$nbChances.' essai'.($nbChances > 1 ? 's' : '').'.'.PHP_EOL;

    if (count($historiqueTentatives)) {
        echo 'Vous avez déjà tenté : '.implode(', ', $historiqueTentatives).PHP_EOL;
    }

    echo PHP_EOL;

    // Saisie nouvelle valeur.
    $proposition = trim(readline('Quelle est votre proposition : '));

    if (in_array($proposition, $historiqueTentatives)) {
        echo 'Vous aviez déjà tenté '.$proposition.' merci de proposé autre chose'.PHP_EOL.PHP_EOL;
    } else {
        // array_push($historiqueTentatives, $proposition);
        $historiqueTentatives []= $proposition;

        // Traitement reel d'une proposition.
        if (strlen($proposition) === 1) {       // Si on a propose une lettre.
            // Teste si la lettre est bien presente dans le mot.
            if (strpos($aTrouver, $proposition) === false) { // Si non => on perd une vie.
                $nbChances--;
                echo $proposition.' n\'est pas dans le mot à trouver.';
            } else { // Si oui => on affiche la lettre dans $etat (autant de fois qu'elle est présente).
                $nb = 0;

                for ($i = 0; $i < strlen($aTrouver); $i++) {
                    if ($aTrouver[$i] === $proposition) {
                        $nb++;
                        $etat[$i] = $proposition;
                    }
                }

                echo 'Il y a '.$nb.' \''.$proposition.'\' dans le mot à trouver.';
            }

            echo PHP_EOL.PHP_EOL;
        } elseif ($aTrouver === $proposition) { // On propose le bon mot.
            $etat = $aTrouver;
        } else {                                // On propose un mauvais mot.
            $nbChances--;
        }
    }
} while ($etat !== $aTrouver && $nbChances > 0);

// Arrive ici, nbChances n'est pas fiable (car on decremente meme enn cas de bonne reponse).
if ($etat === $aTrouver) {        // Si l'utilisateur a gagne.
    $plural = $nbChances < 4 ? 's' : '';
    echo 'Bravo il fallait trouver '.$aTrouver.'.';
    echo 'Vous avez gagné avec '.(5 - $nbChances)
        .' mauvaise'.$plural.' réponse'.$plural.'.'.PHP_EOL;
} else {                          // S'il a perdu.
    echo 'Vous avez perdu !'.PHP_EOL;
}
