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
    // Création d'une liste de pokémons
    $pokemonModel = new PokemonModel();
    $pokemons = $pokemonModel->findAll();
 
    // Prépatation du tableau à envoyer au layout
    $data = [
      'title' => 'Phase de Combat !',
      'pokemons' => $pokemons
    ];
 
    // Rendu avec layout
    $this->renderView('battle/select', $data);
  }

  public function start()
  {
    // Faut choisir un pokemon
    if(!isset($_POST['poke1']) || !isset($_POST['poke2'])){
      header('Location: /battle/select');
      die();
    }

    $pokemonModel = new PokemonModel();
    $poke1 = $pokemonModel->findOneById($_POST['poke1']);
    $poke2 = $pokemonModel->findOneById($_POST['poke2']);
    
    $combat = new Combat($poke1, $poke2);
    $combat->demarrerCombat();
    
    header('Location: /battle/fight');
    die();
    }
}