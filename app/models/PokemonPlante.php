<?php

require_once './app/models/traits/soins.php';

class PokemonPlante extends Pokemon{
    use Soins;

    // Propriétés
    protected $faiblesse = "Feu";
    protected $energy = "/assets/image/plante.png";

    // Fonction Get
    public function getFaiblesse(): string
    {
        return $this->faiblesse;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }

    // Fonction permettant d'utiliser la capacité spécial
    public function capaciteSpeciale(Pokemon $adversaire)
    {
        $adversairePointsDeVie = $adversaire->getPointsDeVie();
        $pokemonAttaque = $this->getPuissanceAttaque();

        if ($adversaire->getType() == "Eau") {
            $nouveauPointDeVie = $adversairePointsDeVie - $pokemonAttaque * 1.5;
        } else {
            $nouveauPointDeVie = $adversairePointsDeVie - $pokemonAttaque;
        }
        
        if ($nouveauPointDeVie < 0) {
            $nouveauPointDeVie = 0;
        }
        
        $adversaire->setPointsDeVie($nouveauPointDeVie);
    }
}