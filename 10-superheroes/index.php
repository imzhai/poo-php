<?php

/**
 * 1/ Créer une classe SuperHeroe avec les attributs name, power, identity et universe.
 */

require_once 'SuperHeroe.php';

$ironMan = new SuperHeroe();
$ironMan->name = 'Iron Man';
$ironMan->power = 'Riche';
$ironMan->identity = 'Tony Stark';
$ironMan->universe = 'Marvel';

$captainAmerica = new SuperHeroe('Captain America', 'Force', 'Steve Rogers', 'Marvel');
$hulk = new SuperHeroe('Hulk', 'Force', 'Bruce Banner', 'Marvel');
$batman = new SuperHeroe('Batman', 'Riche', 'Bruce Wayne', 'DC');

echo $hulk->getRealIdentity(); // L'identité réelle de Hulk est Bruce Banner
echo $hulk->getUniverse(); // Hulk fait partie de l'univers Marvel

$heroes = [$ironMan, $captainAmerica, $hulk, $batman];
var_dump($heroes);

/**
 * 2/
 * Créer la base de données : superheroes
 * Créer la table : superheroe
 * Créer les colonnes : name (VARCHAR), power (VARCHAR), identity (VARCHAR) et universe (VARCHAR)
 */
