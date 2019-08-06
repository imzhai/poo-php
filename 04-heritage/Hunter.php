<?php
    
    class Hunter extends Character
    {
        public function rangedAttack($character)
        {
            $character->health -= $this->strenght * 3;
        }
    }