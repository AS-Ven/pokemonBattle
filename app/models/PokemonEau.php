<?php

require_once './app/models/traits/soins.php';

class PokemonEau extends Pokemon{
    use Soins;

    // Propriétés
    protected $faiblesse = "Plante";
    protected $energy = "/assets/image/eau.jpg";

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
    public function capaciteSpeciale($adversaire)
    {
        $_SESSION[$adversaire . 'newHP'] = $_SESSION[$adversaire . 'newHP'] - ($this->getPuissanceAttaque() * 2);
        file_put_contents("php://stderr", print_r($adversaire->getId(), TRUE));
    }
}