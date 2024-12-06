<?php

class PokemonPlante extends Pokemon
{
    protected $faiblesse = "Feu";
    protected $energy = "/assets/image/plante.jpg";

    public function getFaiblesse(): string
    {
        return $this->faiblesse;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function capaciteSpeciale(object $adversaire): float
    {
        $adversairePointsDeVie = $adversaire->pointsDeVie;
        $adversaireDefense = $adversaire->defense;
        $pokemonAttaque = $this->puissanceAttaque;

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
