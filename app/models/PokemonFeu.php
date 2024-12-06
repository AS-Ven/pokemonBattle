<?php

class PokemonFeu extends Pokemon
{
    protected $faiblesse = "Eau";
    protected $energy = "/assets/image/feu.jpg";

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
            $nouveauPointDeVie = ($adversairePointDeVie - $pokemonAttaque * $adversaireDefense) * 1.5;
        } else {
            $nouveauPointDeVie = $adversairePointDeVie - $pokemonAttaque * $adversaireDefense;
        }
        
        if ($nouveauPointDeVie < 0) {
            $nouveauPointDeVie = 0;
        }
        
        return $nouveauPointDeVie;
    }
}