<?php

class PokemonFeu extends Pokemon
{
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