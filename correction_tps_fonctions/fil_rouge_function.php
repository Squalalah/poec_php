<?php

/**
 * Choix d'un mot aléatoire à partir du dictionnaire interne.
 *
 * @return string
 */
function choisirMot(): string
{
    // Ensemble de mots disponibles.
    $dico = ['kayak', 'rouge', 'trois'];

    // Choix du mot a trouver.
    return $dico[array_rand($dico)];
}

/**
 * Genere un "indice" à partir d'un mot donne en parametre.
 *
 * Exemple :
 * <code>
 * generedIndice('sous-terrain');
 * /// Retourne '____-_______'
 * </code>
 *
 * @return string
 */
function genererIndice(string $mot): string
{
    return preg_replace('/[\wàéèëêïçùûâ]/i', '_', $mot);
}

/**
 * Traite une proposition de l'utilisateur.
 *
 * @param string $aTrouver
 * @param string $etat Etat de la partie (mutable).
 * @param string $proposition
 * @return boolean TRUE si la proposition de l'utilisateur correspond bien a une bonne reponse (lettre a trouver, mot entier).
 */
function traiterProposition(string $aTrouver, string &$etat, string $proposition): bool
{
    $propositionCorrecte = true;

    // Traitement reel d'une proposition.
    if (strlen($proposition) === 1) {       // Si on a propose une lettre.
        // Teste si la lettre est bien presente dans le mot.
        if (strpos($aTrouver, $proposition) === false) { // Si non => on perd une vie.
            $propositionCorrecte = false;
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
        $propositionCorrecte = false;
    }

    return $propositionCorrecte;
}

function annoncerVictoireOuDefaite(string $aTrouver, string $etat, int $nbChances): void
{
    // Arrive ici, nbChances n'est pas fiable (car on decremente meme enn cas de bonne reponse).
    if ($etat === $aTrouver) {        // Si l'utilisateur a gagne.
        $plural = $nbChances < 4 ? 's' : '';
        echo 'Bravo il fallait trouver '.$aTrouver.'.';
        echo 'Vous avez gagné avec '.(5 - $nbChances)
            .' mauvaise'.$plural.' réponse'.$plural.'.'.PHP_EOL;
    } else {                          // S'il a perdu.
        echo 'Vous avez perdu !'.PHP_EOL;
    }
}

$aTrouver = choisirMot();
// Initialisation du compteur de chances (on perds si ce nombre atteint 0).
$nbChances = 5;
$etat = genererIndice($aTrouver);
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
    } else { // Nouvelle proposition.
        $historiqueTentatives []= $proposition;

        if (!traiterProposition($aTrouver, $etat, $proposition)) {
            $nbChances--;
        }
    }
} while ($etat !== $aTrouver && $nbChances > 0);

annoncerVictoireOuDefaite($aTrouver, $etat, $nbChances);
