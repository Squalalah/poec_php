<?php

// Declaration d'une fonction.
function maPremiereFonction()
{
    echo 'Code présent dans ma première fonction'.PHP_EOL;
}

// Utilisation d'une fonction.
// maPremiereFonction();

/**
 * Retourne le maximum entre les deux nombres passes en parametre.
 *
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function fnAvecParam($a, $b)
{
    return $a > $b ? $a : $b;
}

/*
Le typage :
function <nom_de_la_fonction>(<type_param_1> <nom_param_1>[, ..., <type_param_x> <nom_param_x>]): <type_de_retour>
{
    [Traitement]
    return <valeur>;
}
*/

/**
 * Retourne le maximum entre les deux nombres passes en parametre.
 *
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function fnAvecParamEtTypage(int $a, int $b): int
{
    return $a > $b ? $a : $b;
}

// echo 'Le plus grand entre 3 et 60 est : '.fnAvecParam(3, 60).PHP_EOL;

/**
 * Ma fonction utilisant la notion de parametre inifini.
 *
 * @param integer ...$params
 * @return integer
 */
function myMin(int ...$params): int
{
    $min = null;

    if (count($params)) {
        $min = $params[0];

        for ($i = 1; $i < count($params); $i++) {
            if ($min > $params[$i]) {
                $min = $params[$i];
            }
        }
    }

    return $min;
}

// echo myMin(2).PHP_EOL;
// echo myMin(2, 4).PHP_EOL;
// echo myMin(2, 4, 4, 2, 622, 1, 5, -6).PHP_EOL;

function fonctionAvecValeurParDefaut(string $nom = 'world'): void
{
    echo 'Hello '.$nom.'!'.PHP_EOL;
}

// fonctionAvecValeurParDefaut();
// fonctionAvecValeurParDefaut('Jacques');

// function toto()
// { return null; }

// /** @var DateTime $v */
// $v = toto();

// $v->format('');


// function mauvaisType(int $a): int
// { return $a; }

// echo mauvaisType('salut'); // Erreur fatale lors de l'execution.

function fnNull(?int $a, int $b = null): void
{}

function fnArray(array $tab)
{}

// $valeurCopie = 1;

function paramCopie(int $a): void
{
    $a++;
    echo 'la valeur vaut '.$a.' dans paramCopie'.PHP_EOL;
}
function paramReference(int &$a): void
{
    $a++;
    echo 'la valeur vaut '.$a.' dans paramReference'.PHP_EOL;
}

// paramReference($valeurCopie);
// echo 'la valeur vaut '.$valeurCopie.' dans le scope global'.PHP_EOL;

$maDate = new DateTime();

function paramDate(DateTime $date)
{
    // $local = clone $date; // On aurait pu faire une copie manuellement.
    $date->setDate(1970, 1, 1);
}

echo $maDate->format('d/m/Y').PHP_EOL;
paramDate($maDate);
echo $maDate->format('d/m/Y').PHP_EOL;
