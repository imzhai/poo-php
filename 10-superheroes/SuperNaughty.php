<?php

class SuperNaughty
{
    public $name;
    public $hobby;
    public $identity;
    public $universe;

    public function __construct($name= null, $hobby=null, $identity = null, $universe = null)
    {
    $this->name = $name;
    $this->hobby = $hobby;
    $this->identity = $identity;
    $this->universe = $universe;
    }

    // Permet de récupérer les données comprises dans le $_POST ( ici noté $data)
    public function hydrate($data)
    {
        $this->name = isset($data['name']) ? trim(htmlentities($data['name'])) : null;
        $this->hobby = isset($data['hobby']) ? trim(htmlentities($data['hobby'])) : null;
        $this->identity = isset($data['identity']) ? trim(htmlentities($data['identity'])) : null;
        $this->universe = isset($data['universe']) ? trim(htmlentities($data['universe'])) : null;
    }

    public function save()
    {
        // Prépare la requête pour insérer le vilain
        $sql = "INSERT INTO supernaughty (name, hobby, identity, universe) VALUES (:name, :hobby, :identity, :universe)";
        // ici la BDD est la même que pour les héros, nous pouvons donc garder la même requête PDO contenue dans la database
        $query = Database::get()->prepare($sql);
        $query->bindValue(':name', $this->name);
        $query->bindValue(':hobby', $this->hobby);
        $query->bindValue(':identity', $this->identity);
        $query->bindValue(':universe', $this->universe);
        // On demande à la fonction de renvoyer la requête que nous venons de préparer quand elle sera appelée
        return $query->execute();
    }

    // Fonction permettant de modifier le vilain. Ici c'est l'id du vilain qui sera en parametre
    public function update($id)
    {
        $sql = "UPDATE supernaughty SET `name`=:name, `hobby`=:hobby, `identity`=:identity, `universe`=:universe WHERE `id`=:id";
        $query = Database::get()->prepare($sql);

        $query->bindValue(':name', $this->name);
        $query->bindValue(':hobby', $this->hobby);
        $query->bindValue(':identity', $this->identity);
        $query->bindValue(':universe', $this->universe);
        // Il faut absolument ajouter l'id car nous en avons besoin pour cibler le personnage a modifier. Cette fois ci on appelera la variable qui est présente en paramètre.
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        return $query->execute();

    }

    public function delete($id)
    {
        $query = Database::get()->prepare("DELETE FROM supernaughty WHERE id=:id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        return $query->execute();

    }

    /**
     * permet de récupérer un vilain particuler par son ID
     */
    public static function find($id)
    {
        $sql = "SELECT * FROM supernaughty WHERE id=:id";
        $query =  Database::get()->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Permet de récupérer tous les vilain
     */
    public static function findAll()
    {
        $sql = "SELECT id, name, hobby, identity, universe FROM supernaughty";
        $query = Database::get()->prepare($sql);
        $query->execute();
       
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}