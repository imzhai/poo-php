<?php

class Car
{
    private $wheel = 4;
    private $color;
    private $brand;
    private $model;

    public function __construct($color = null, $brand = null, $model = null)
    {
        $this->color = $color;
        $this->brand = $brand;
        $this->model = $model;
    }

    
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }


    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }


    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }


    public function drive()
    {
        return 'La ' . $this->brand .' '. $this->model .  ' roule sur ses ' . $this->wheel . ' roues';
    }

    public function klaxon()
    {
        return 'La voiture ' . $this->color . ' klaxonne.';
    }

}