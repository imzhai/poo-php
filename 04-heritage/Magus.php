<?php
    
    class Magus extends Character
    {
        // On surchage un attribut
        protected $mana = 20;
        public function __construct($name)
        {
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