<?php

class PokemonPlante extends Pokemon
{
    protected $faiblesse = "Feu";

    public function getFaiblesse(): string
    {
        return $this->faiblesse;
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