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
$spiderMan = new SuperHeroe('Spider-Man', 'Souple', 'Peter Parker', 'Marvel');


echo $hulk->getRealIdentity(); // L'identité réelle de Hulk est Bruce Banner
echo $hulk->getUniverse(); // Hulk fait partie de l'univers Marvel

 // $heroes = [$ironMan, $captainAmerica, $hulk, $batman];
// var_dump($heroes);

var_dump(SuperHeroe::all());

/**
 * 2/
 * Créer la base de données : superheroes
 * Créer la table : superheroe
 * Créer les colonnes : name (VARCHAR), power (VARCHAR), identity (VARCHAR) et universe (VARCHAR)
 * 
 * 3/ Créer connexion avec la base de données en utilisant PDO
 * faire une première requète pour insérer le héros suivant
 */

 // Connexion avec PDO

try
{
    $db = new PDO('mysql:host=localhost;dbname=wf3_superheroes;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ]); // Activer les erreurs MySQL
}
catch(Exception $e)
{
    echo $e->getMessage();
}
 // La requête pour insérer le héros 
$sql = "INSERT INTO `superheroe` (name, power, identity, universe) VALUES (:name, :power, :identity, :universe)";
  $query = $db->prepare($sql);

  $query->bindValue(':name', 'Captain America');
  $query->bindValue(':power', 'Force');
  $query->bindValue(':identity', 'Steve Rogers');
  $query->bindValue(':universe', 'Marvel');

  $query->execute();

  