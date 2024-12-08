<?php

class Combat {

    #region Propriétés

    private Pokemon $pokemon1;
    private Pokemon $pokemon2;
    private bool $status;

    public function __construct(Pokemon $pokemon1, Pokemon $pokemon2, bool $status) {
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
        $this->status = $status;
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

    public function getStatus(): bool
    {
        return $this->status;
    }
    public function setStatus(bool $status): bool
    {
        $this->status = $status;
        return $status;
    }

    #endregion



    #region Methodes

    // Fonction permettant de démarrer un combat
    public function demarrerCombat()
    {
        $this->sauvegarderCombat();
    }
    
    // Fonction de sauvegarde des informations de combat
    public function sauvegarderCombat()
    {
        // Alternance entre les tours des pokémons
        if ($this->getStatus() == 1){
            $this->setStatus(0);
        } else {
            $this->setStatus(1);
        }
        // Modification de la session
        $_SESSION['combat'] = serialize($this);
    }

    // Fonction de lecture du combat
    public static function getCombat(): Combat | null
    {
        if (!isset($_SESSION['combat']))
        {
            return null;
        }
        return unserialize($_SESSION['combat']);
    }

    // Fonction appelant la fonction d'attaque
    public function tourDeCombat(Pokemon $attaquant, Pokemon $defenseur)
    {
        $attaquant->attaquer($defenseur);
        $this->sauvegarderCombat();
    }

    // Fonction appelant la fonction d'attaque spé
    public function utiliserAttaqueSpe(Pokemon $attaquant, Pokemon $defenseur)
    {
        $attaquant->capaciteSpeciale($defenseur);
        $this->sauvegarderCombat();
    }

    // Fonction appelant la fonction de soin
    public function utiliserSoin($pokemon)
    {
        $pokemon->soigner();
        $this->sauvegarderCombat();
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