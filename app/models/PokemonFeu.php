<?php

class PokemonFeu extends Pokemon {
    public function capaciteSpeciale(string $adversaire): float
    {
        $adversairePointDeVie = $adversaire->pointDeVie;
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