<?php

abstract class Pokemon {
  
    #region Propriétés

    private int $id;
    private string $nom;
    private string $type;
    private float $pointsDeVie;
    private int $puissanceAttaque;
    private float $defense;
    private string $img;
    private string $faiblesse;
    private string $energy;
  
    public function __construct($row) {
        $this->id = $row['id'];
        $this->nom = $row['nom'];
        $this->type = $row['type'];
        $this->pointsDeVie = $row['pointsDeVie'];
        $this->puissanceAttaque = $row['puissanceAttaque'];
        $this->defense = $row['defense'];
        $this->img = $row['img'];
        $this->faiblesse = "test";
    }
    
    #endregion



    #region Abstract

    abstract public function capaciteSpeciale(object $adversaire);
    abstract public function getFaiblesse(): string;
    abstract public function getEnergy(): string;

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

    public function getPointsDeVie(): float
    {
        return $this->pointsDeVie;
    }
    public function setPointsDeVie(float $pointsDeVie): float
    {
        $this->pointsDeVie = $pointsDeVie;
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

    // Fonction permettant d'attaquer un adversaire
    public function attaquer($adversaire): float
    {
        // Définition des variable
        $adversairePointsDeVie = $adversaire->PointsDeVie;
        $adversaireDefense = $adversaire->defense;
        $pokemonAttaque = $this->puissanceAttaque;
        
        // Utilisation de l'attaque
        $nouveauPointsDeVie = $adversairePointsDeVie - $pokemonAttaque * $adversaireDefense;
        // Vérification du nombre de points de vie
        if ($nouveauPointsDeVie < 0) {
            $nouveauPointsDeVie = 0;
        }
        
        // Renvoie les points de vie restant
        return $nouveauPointsDeVie;
    }

    // Fonction permettant de recevoir des dégats
    public function recevoirDegats(float $degats): float
    {
        $nouveauPointsDeVie = $this->pointsDeVie - $degats;
        if ($nouveauPointsDeVie < 0) {
            $nouveauPointsDeVie = 0;
        }

        return $nouveauPointsDeVie;
    }

    // Fonction vérifiant si un pokémon est KO
    public function estKO(): bool
    {
        if ($this->pointsDeVie = 0) {
            return true;
        } else {
            return false;
        }
    }

    #endregion
}