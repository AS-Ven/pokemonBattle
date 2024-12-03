<?php

require_once './app/utils/Render.php';

class BattleController{
  use Render;

  public function fight(): void
  {
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

  public function select(): void
  {
    $this->renderView('battle/select');
  }
}