<?php

require_once './app/models/traits/soins.php';

class PokemonFeu extends Pokemon{
    use Soins;

    // Propriétés
    protected $faiblesse = "Eau";
    protected $energy = "/assets/image/feu.png";

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

        if ($adversaire->getType() == "Plante") {
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