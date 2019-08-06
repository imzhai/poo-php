<?php


class Cat
{
    private $name;
    private $type;
    private $fur;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {   
        if (strlen($name) < 3){
            throw new Exception('le nom est trop court');
        }
        
        $this->name = $name;
        // Retourner l'objet permet de chaines les appels de méthodes
        return $this;
    }


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

}