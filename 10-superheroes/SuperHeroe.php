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
}
