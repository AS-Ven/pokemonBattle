<?php

require_once './app/models/traits/soins.php';

class PokemonEau extends Pokemon{
    use Soins;

    // Propriétés
    protected $faiblesse = "Plante";

    // Fonction Get
    public function getFaiblesse(): string
    {
        return $this->faiblesse;
    }

    // Fonction permettant d'utiliser la capacité spécial
    public function capaciteSpeciale($adversaire)
    {
        $_SESSION[$adversaire . 'newHP'] = $_SESSION[$adversaire . 'newHP'] - ($this->getPuissanceAttaque() * 2);
        file_put_contents("php://stderr", print_r($adversaire->getId(), TRUE));
    }
}