<?php
    
    class Magus extends Character
    {
        public function __construct($name)
        {
            // On conserve le compoprtement du constructeur de la classe mère
            parent::__construct($name);
            this->mana *= 2;
        }


        public function castSpell($character)
        {
            $character->health -= $this->mana;
        }

        public function attack($character)
        {
            //On supprime la fonction attack du magus
            return;
        }
    }