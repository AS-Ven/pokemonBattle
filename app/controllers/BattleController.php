<?php

require_once './app/utils/Render.php';

class BattleController{
  use Render;

  // Fonction d'affichage de la page battle/fight
  public function fight(): void
  {
    // Création d'une liste de pokémons
    $pokemonModel = new PokemonModel();
    $pokemons = $pokemonModel->findAll();
 
    // Prépatation du tableau à envoyer au layout
    $data = [
      'title' => 'Phase de Combat !',
      'pokemons' => $pokemons
    ];
 
    // Rendu avec layout
    $this->renderView('battle/fight', $data);
  }

  // Fonction d'affiche de la page battle/select
  public function select(): void
  {
    // Rendu avec layout
    $this->renderView('battle/select');
  }
}