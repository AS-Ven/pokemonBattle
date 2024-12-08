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
    private string $nomAtk;
    private string $nomAtkSpe;
    private int $charge;
  
    public function __construct($row) {
        $this->id = $row['id'];
        $this->nom = $row['nom'];
        $this->type = $row['type'];
        $this->pointsDeVie = $row['pointsDeVie'];
        $this->puissanceAttaque = $row['puissanceAttaque'];
        $this->defense = $row['defense'];
        $this->img = $row['img'];
        $this->faiblesse = "test";
        $this->nomAtk = $row['nomAtk'];
        $this->nomAtkSpe = $row['nomAtkSpe'];
        $this->charge = 0;
    }
    
    #endregion



    #region Abstract

    abstract public function capaciteSpeciale(Pokemon $adversaire);
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


    public function getNomAtk(): string
    {
        return $this->nomAtk;
    }
    public function setNomAtk(string $nomAtk): string
    {
        $this->nomAtk = $nomAtk;
        return $nomAtk;
    }

    public function getNomAtkSpe(): string
    {
        return $this->nomAtkSpe;
    }
    public function setNomAtkSpe(string $nomAtkSpe): string
    {
        $this->nomAtkSpe = $nomAtkSpe;
        return $nomAtkSpe;
    }

    public function getCharge(): int
    {
        return $this->charge;
    }
    public function setCharge(int $charge): int
    {
        $this->charge = $charge;
        return $charge;
    }
    
    #endregion


    #region Méthodes

    // Fonction permettant d'attaquer un adversaire
    public function attaquer(Pokemon $adversaire)
    {
        $attaque = $this->getPuissanceAttaque();
        $defense = $adversaire->getDefense();
        $degats = $attaque - $attaque * $defense;

        // Gestion des charges
        if ($this->getCharge() < 3) {
            $this->setCharge($this->getCharge() + 1);
        }

        $adversaire->recevoirDegats($degats);
    }

    // Fonction permettant de recevoir des dégats
    public function recevoirDegats(float $degats)
    {
        $pv = $this->getPointsDeVie();
        $newPV = $pv - $degats;
        if ($newPV < 0){
            $newPV = 0;
        }

        $this->setPointsDeVie($newPV);
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