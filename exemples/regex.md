Les bases accélérés sur les Regex
=================================


Syntaxe de base
---------------

La syntaxe peut-être représenté sous la forme suivante : /<regex>/<options>

Quelques éléments de la syntaxe :

* n'importe quel caractère => recherche du caractère en question
* [ad0-9] => recherche tous les caractère a OU d OU un chiffre (entre 0 et 9)
* (toto) => les parenthèses ont plusieurs utilités
    * capture d'éléments
    * ensemble (ta|ti) <=> t[ai]
* . => n'importe quel caractère

Quelques alias :

* \d => digit [0-9]
* \D => tout sauf les digit [^0-9]
* \w => **w**ord (caractère alphanumérique) [a-zA-Z0-9_]
* \W => tout sauf caractère alpha-numérique [^a-zA-Z0-9_]
* \s => **s**pace [ \t\n]
* \S => tout sauf espace

Multiplicité :

* ? => 0 ou 1
* * => 0, 1 ou plusieurs
* + => 1 ou plusieurs
* {min,max} => entre *min* fois et *max* fois

Options :
* g => global (prendre toutes les captures si l'option est présente)
* m => multi-ligne (permet d'interpréter une regex sur plusieurs lignes)
* i => case-**i**nsensitive (rend l'expression insenssible à la casse)

Exemple de regex
----------------

```js
/^[\w.-]+@\w+\.[a-z]{2,4}$/gi // l'une des nombreuses regex possible pour valider les mails
```

Outil + tuto
------------

https://regexr.com/

https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/916990-les-expressions-regulieres-partie-1-2
