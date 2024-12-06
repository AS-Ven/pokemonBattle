<?php

require_once './app/utils/Render.php';

class PokemonController{
  use Render;

  // Fonction d'affichage de la page pokemon/findAll
  public function findAll(): void
  {
    // Création d'une liste de pokémons
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
 
  // Fonction d'affichage de la page pokemon/findOneById
  public function findOneById(int $id): void
  {
    // Création d'un pokémon en fonction de son id
    $pokemonModel = new PokemonModel();
    $pokemon = $pokemonModel->findOneById($id);

    // Prépatation du tableau à envoyer au layout
    $data = [
      'title' => 'Liste des pokemons',
      'pokemon' => $pokemon
    ];
 
    // Rendu avec layout
    $this->renderView('pokemon/one', $data);
  }
}