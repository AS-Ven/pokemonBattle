<?php

require_once './app/models/traits/soins.php';

class PokemonFeu extends Pokemon{
    use Soins;

    #region Propriétés

    // Propriétés
    protected $faiblesse = "Eau";
    protected $energy = "/assets/image/feu.png";

    #endregion



    #region Get - Set

    // Fonction Get
    public function getFaiblesse(): string
    {
        return $this->faiblesse;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }

    #endregion



    #region Méthodes

    // Fonction permettant d'utiliser la capacité spécial
    public function capaciteSpeciale(Pokemon $adversaire)
    {
        $pokemonAttaque = $this->getPuissanceAttaque();

        // Vérification du type et gestion de dégats
        if ($adversaire->getType() == "Eau") {
            $degats = $pokemonAttaque * 1.5;
        } else {
            $degats = $pokemonAttaque;
        }
        
        $adversaire->recevoirDegats($degats);
    }

    #endregion
}