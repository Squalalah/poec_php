<!-- Commentaire HTML ; un fichier PHP contient de base du HTML. Il faut préciser que l'on écrit du PHP. -->

<?php // <= Avec ça.

// Mon commentaire sur une seule ligne.

/*
 * Mon
 * Commentaire sur
 * plusieurs lignes.
 */

/**
 * Pour faire une documentation technique, à placer sur :
 * - des variables globales
 * - des fonctions
 * - des classes
 * - ...
 */

/*
 35 | 2
 ---+---
 2  | 17
 15 |
  1 |

35 % 2 = 1
*/

/* Incrémentation
$i = 1;
$i = $i + 1;
$i += 1;
$i++; // Post-incrementation.
++$i; // Pre-incrementation.

$i = $i - 1;
$i -= 1;
$i--;
--$i;

$i -= -2; // $i += 2;

base 10 => base 2    => base 8 => base 16
décimal => binaire   => octal  => hexa-décimal
      0 => 0000 0000 =>      0 =>  0
      1 => 0000 0001 =>      1 =>  1
      2 => 0000 0010 =>      2 =>  2
      3 => 0000 0011 =>      3 =>  3
      4 => 0000 0100 =>      4 =>  4
      5 => 0000 0101 =>      5 =>  5
      6 => 0000 0110 =>      6 =>  6
      7 => 0000 0111 =>      7 =>  7
      8 => 0000 1000 =>     10 =>  8
      9 => 0000 1001 =>     11 =>  9
     10 => 0000 1010 =>     12 =>  A
     11 => 0000 1011 =>     13 =>  B
     12 => 0000 1100 =>     14 =>  C
     13 => 0000 1101 =>     15 =>  D
     14 => 0000 1110 =>     16 =>  E
     15 => 0000 1111 =>     17 =>  F
     16 => 0001 0000 =>     20 => 10
     17 => 0001 0001 =>     21 => 11
     18 => 0001 0010 =>     22 => 12
     19 => 0001 0011 =>     23 => 13
     20 => 0001 0100 =>     24 => 14

1 byte (regroupement de bits ; souvent 8 bits)
1 octet (binaire) => 8 bits
Il y a 10 types de personnes. Ceux qui lisent le binaire, et les autres.

0x10 => 16 => 020 => 0b000010000

-----------------

Opérateurs booléen
NON => inversion de la valeur booléen (TRUE => FALSE ; FALSE => TRUE)

OU => on peut voir ça comme une salle avec deux portes, pour rentrer on peut passer par n'importe laquelle des deux portes

ET => on peut représenter ça par un couloir avec deux portes (1 au début du couloir, 1 à la fin). Si on veut pouvoir franchir le couloir, il faut alors que les deux portes soient ouvertes.

a | b || OU | ET | OUX (^)
--+---++----+----+--------
0 | 0 ||  0 |  0 |  0
0 | 1 ||  1 |  0 |  1
1 | 0 ||  1 |  0 |  1
1 | 1 ||  1 |  1 |  0

$a = true;
$b = false;

$v1 = $a && !$b; // $v1 = 1 (true)
$v2 = !!$a || !!!$b; // => $a || !$b; (on peut enlever les négations ; deux/deux) => $v2 = true

3 => 0011
2 => 0010
| => 0011 => 3
& => 0010 => 2

 99 => 0b01100011
184 => 0b10111000
|   => 0b11111011 => 251
&   => 0b00100000 =>  32
||  => 0b00000001 => 1
&&  => 0b00000001 => 1
*/

$equals = (3 == '3');
$different = (3 != '4');

if (3 == '3') {
}

if (3 < 5) {}
if (3 <= 3) {}
if (5 > 3) {}

// Falsy : false, 0, null, ''
// Truthy : true, -6, 1, 10, new \DateTime(), 'toto', ' '

if ($value > 15) {
    // dezde
} elseif ($value < -10) {
    // ...
} else {
    // dedeez
}

$value = '';

if (!$value) {
    $value = 'toto';
}

echo $value;

// ----

if (is_string($value)) {
    echo $value.' est une chaîne de caractères'.PHP_EOL;
} else {
    echo 'Le type n\'est pas connu'.PHP_EOL;
}

echo (is_string($value) ? $value.' est une chaîne de caractères' : 'Le type n\'est pas connu').PHP_EOL;

echo('coucou');
