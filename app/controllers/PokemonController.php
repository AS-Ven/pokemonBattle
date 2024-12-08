<?php

require_once './app/utils/Render.php';

class PokemonController{
  use Render;

  #region FindAll

  // Fonction d'affichage de la page pokemon/findAll
  public function findAll(): void
  {
    // Création d'une liste de pokémons
    $pokemonModel = new PokemonModel();
    $pokemons = $pokemonModel->findAll();
 
    // Donnés envoyées à la view
    $data = [
      'title' => 'Liste des pokemons',
      'pokemons' => $pokemons
    ];
 
    // Rendu avec layout
    $this->renderView('pokemon/all', $data);
  }

  #endregion
}