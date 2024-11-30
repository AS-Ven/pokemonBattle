<?php

// abstract class Pokemon {
class Pokemon {

    #region Propriétés

    private int $id;
    private string $nom;
    private string $type;
    private float $pointsDeVie;
    private int $puissanceAttaque;
    private float $defense;
    private string $img;

    #endregion



    #region Abstract

    // abstract public function capaciteSepciale(string $adversaire);

    #endregion



    #region Get - Set

    public function getId(){
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom): string
    {
        $this->nom = $nom;
        return $nom;
    }

    public function getType(): string
    {
        return $this->type;
    }
    public function setType(string $type): string
    {
        $this->type = $type;
        return $type;
    }

    public function getPointDeVie(): float
    {
        return $this->pointDeVie;
    }
    public function setPointDeVie(float $pointsDeVie): float
    {
        $this->pointDeVie = $pointsDeVie;
        return $pointsDeVie;
    }

    public function getPuissanceAttaque(): int
    {
        return $this->puissanceAttaque;
    }
    public function setPuissanceAttaque(int $puissanceAttaque): int
    {
        $this->puissanceAttaque = $puissanceAttaque;
        return $puissanceAttaque;
    }

    public function getDefense(): float
    {
        return $this->defense;
    }
    public function setDefense(float $defense): float
    {
        $this->defense = $defense;
        return $defense;
    }

    public function getImg(): string
    {
        return $this->img;
    }
    public function setImg(string $img): string
    {
        $this->img = $img;
        return $img;
    }

    
    #endregion


    #region Méthodes

    public function attaquer(string $adversaire): float
    {
        $adversairePointDeVie = $adversaire->pointDeVie;
        $adversaireDefense = $adversaire->defense;
        $pokemonAttaque = $this->puissanceAttaque;
        
        $nouveauPointDeVie = $adversairePointDeVie - $pokemonAttaque * $adversaireDefense;
        if ($nouveauPointDeVie < 0) {
            $nouveauPointDeVie = 0;
        }
        
        return $nouveauPointDeVie;
    }

    public function recevoirDegats(float $degats): float
    {
        $nouveauPointDeVie = $this->pointDeVie - $debats;
        if ($nouveauPointDeVie < 0) {
            $nouveauPointDeVie = 0;
        }

        return $nouveauPointDeVie;
    }

    public function estKO(): bool
    {
        if ($this->pointDeVie = 0) {
            return true;
        } else {
            return false;
        }
    }

    #endregion
}