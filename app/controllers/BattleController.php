<?php

require_once './app/utils/Render.php';

class BattleController{
  use Render;

  // Fonction d'affichage de la page battle/fight
  public function fight(): void
  {
    // Création d'une liste de pokémons
    $pokemonModel = new PokemonModel();
    $poke1 = $pokemonModel->findOneById(1);
    $poke2 = $pokemonModel->findOneById(2);
    
 
    // Prépatation du tableau à envoyer au layout
    $data = [
      'title' => 'Liste des pokemons',
      'poke1' => $poke1,
      'poke2' => $poke2
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