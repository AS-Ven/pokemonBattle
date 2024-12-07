<?php

require_once './app/models/traits/soins.php';

class PokemonFeu extends Pokemon{
    use Soins;

    // Propriétés
    protected $faiblesse = "Eau";
    protected $energy = "/assets/image/feu.jpg";

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
    public function capaciteSpeciale(object $adversaire): float
    {
        $adversairePointsDeVie = $adversaire->pointsDeVie;
        $adversaireDefense = $adversaire->defense;
        $pokemonAttaque = $this->getPuissanceAttaque();

        if ($adversaire->type == "Plante") {
            $nouveauPointDeVie = ($adversairePointsDeVie - $pokemonAttaque * $adversaireDefense) * 1.5;
        } else {
            $nouveauPointDeVie = $adversairePointsDeVie - $pokemonAttaque * $adversaireDefense;
        }
        
        if ($nouveauPointDeVie < 0) {
            $nouveauPointDeVie = 0;
        }
        
        return $nouveauPointDeVie;
    }
}