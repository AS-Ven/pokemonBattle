<?php

require_once './app/utils/Render.php';

class PokemonController{
  use Render;
  public function findAll(): void
  {
    $pokemonModel = new PokemonModel();
    $pokemons = $pokemonModel->findAll();
 
    // Prépatation du tableau à envoyer au layout
    $data = [
      'title' => 'Liste des pokemons',
      'pokemons' => $pokemons
    ];
 
    // Rendu avec layout
    $this->renderView('pokemon/all', $data);
  }
 
  public function findOneById(int $id): void
  {
    $pokemonModel = new PokemonModel();
    $pokemon = $pokemonModel->findOneById($id);
 
    require_once './app/views/pokemon/one.php';
  }
}