<?php


class Game
{
    /**
     * Contient les joueurs de la partie 
     *
     * @var array
     */
    private $players = [];

    /**
     * Permet d'ajouter un joueur à la partie
     *
     * @param [type] $player
     * @return void
     */
    public function addPlayer($player)
    {   
        // array_push(this->players, $player);
        $this->players[] = $player;
        return $this;
    }
}