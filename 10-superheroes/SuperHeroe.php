<?php

class SuperHeroe
{
    public $name;
    public $power;
    public $identity;
    public $universe;

    public function __construct($name = null, $power = null, $identity = null, $universe = null)
    {
        $this->name = $name;
        $this->power = $power;
        $this->identity = $identity;
        $this->universe = $universe;
    }

    public function getRealIdentity()
    {
        return 'L\'identité réelle de '.$this->name.' est '.$this->identity;
    }

    public function getUniverse()
    {
        return $this->name.' fait partie de l\'univers '.$this->universe;
    }
}
