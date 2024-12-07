<?php

class Combat {

    #region Propriétés

    private Pokemon $pokemon1;
    private Pokemon $pokemon2;

    public function __construct(Pokemon $pokemon1, Pokemon $pokemon2) {
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
    }

    #endregion



    #region Set - Get

    public function getPokemon1(): object
    {
        return $this->pokemon1;
    }
    public function setPokemon1(string $pokemon1): string
    {
        $this->pokemon1 = $pokemon1;
        return $pokemon1;
    }

    public function getPokemon2(): object
    {
        return $this->pokemon2;
    }
    public function setPokemon2(string $pokemon2): string
    {
        $this->pokemon2 = $pokemon2;
        return $pokemon2;
    }

    #endregion



    #region Methodes

    // Fonction permettant de démarrer un combat
    public function demarrerCombat()
    {
        // A faire
    }

    // Fonction gérant le déroullement du combat
    public function tourDeCombat(Pokemon $attaquant, Pokemon $defenseur)
    {
        $attaquant->attaquer($defenseur);
    }

    // Fonction déterminant le vainqueur d'un combat
    public function determinerVainqueur()
    {
        if($this->pokemon1->getPointsDeVie() <= 0)
        {
            return $this->pokemon2;
        }

        if ($this->pokemon2->getPointsDeVie() <= 0)
        {
            return $this->pokemon1;
        }

        return null;
    }

    #endregion
    
}