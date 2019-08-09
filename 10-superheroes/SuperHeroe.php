<?php

class SuperHeroe
{
    public $name;
    public $power;
    public $identity;
    public $universe;
    // Un attribut statique est conservé par toutes les instances
    public static $heroes = [];
    

    public function __construct($name = null, $power = null, $identity = null, $universe = null)
    {
        $this->name = $name;
        $this->power = $power;
        $this->identity = $identity;
        $this->universe = $universe;
        // $this représente le SuperHeroe qui vient d'être créé
        self::$heroes[] = $this;
    }

    public function getRealIdentity()
    {
        return 'L\'identité réelle de '.$this->name.' est '.$this->identity;
    }

    public function getUniverse()
    {
        return $this->name.' fait partie de l\'univers '.$this->universe;
    }
    /***
     * La fonction doit être appelée sans avoir une instance de SuperHeroe -> ( instance) là, on utilisera ::
     */
    public static function all()
    {
        // Self est la même chose que SuperHero
        // Les :: permettent d'accéder à un attribut statique
        return self::$heroes;
    }

    /**
     * cette fonction permet d'assigner des valeurs aux attributs de l'objet
     *
     * @return void
     */
    public function hydrate($data)
    {
       $this->name = isset($data['name']) ? trim(htmlentities($data['name'])) : null;
       $this->power = isset($data['power']) ? trim(htmlentities($data['power'])) : null;
       $this->identity = isset($data['identity']) ? trim(htmlentities($data['identity'])) : null;
       $this->universe = isset($data['universe']) ? trim(htmlentities($data['universe'])) : null;
    }

    /**
     * Permet d'enregister le héros en base de données
     */

    public function save()
    {
            // connexion PDO
        //Préparare la requête pour insérer le héros
        $sql = "INSERT INTO superheroe (name, power, identity, universe) VALUES (:name, :power, :identity, :universe)";
        $query = Database::get()->prepare($sql);
        // associe les données récupérées à la requête
        $query->bindValue(':name',$this->name);
        $query->bindValue(':power',$this->power);
        $query->bindValue(':identity',$this->identity);
        $query->bindValue(':universe',$this->universe);

        return $query->execute(); // Execute la requête préparée et renvoie un booleen
    }

        /**
     * Permet de modifier le héros en base de données
     */

    public function update($id)
    {
        //Prépare la requête pour modifier le héros
        $sql = "UPDATE superheroe SET `name`=:name, `power`=:power, `identity`=:identity, `universe`=:universe WHERE `id`=:id ";
        $query = Database::get()->prepare($sql);

        $query->bindValue(':name',$this->name);
        $query->bindValue(':power',$this->power);
        $query->bindValue(':identity',$this->identity);
        $query->bindValue(':universe',$this->universe);
        $query->bindValue(':id', $id, PDO::PARAM_INT);

         return $query->execute();
    }
}
