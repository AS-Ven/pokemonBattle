<?php

require_once './app/utils/Render.php';

class BattleController{
  use Render;

  // Fonction d'affichage de la page battle/fight
  public function fight(): void
  {
    // Création d'une liste de pokémons
    $combat = Combat::getCombat();
    $poke1 = $combat->getPokemon1();
    $poke2 = $combat->getPokemon2();

    $pokemonModel = new PokemonModel();
    $modelPoke1 = $pokemonModel->findOneById($poke1->getId());
    $modelPoke2 = $pokemonModel->findOneById($poke2->getId());

    if(isset($_POST['poke1atk'])){
      if($combat->getStatus() == 0){ 
        $combat->tourDeCombat($poke1, $poke2);
      }
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();
    }
    if(isset($_POST['poke2atk'])){
      if($combat->getStatus() == 1){ 
        $combat->tourDeCombat($poke2, $poke1);
      }
      header("Location: " . $_SERVER['REQUEST_URI']);
      exit();
    }

    if(isset($_POST['poke1heal'])){
      if($combat->getStatus() == 0){ 
        $combat->utiliserSoin($poke1);
      }
      header("Location: " . $_SERVER['REQUEST_URI']);
      exit();
    }
    if(isset($_POST['poke2heal'])){
      if($combat->getStatus() == 1){ 
        $combat->utiliserSoin($poke2);
      }
      header("Location: " . $_SERVER['REQUEST_URI']);
      exit();
    }

    if(isset($_POST['poke1atkspe'])){
      if($combat->getStatus() == 0){ 
        $combat->utiliserAttaqueSpe($poke1, $poke2);
      }
      header("Location: " . $_SERVER['REQUEST_URI']);
      exit();
    }
    if(isset($_POST['poke2atkspe'])){
      if($combat->getStatus() == 1){ 
        $combat->utiliserAttaqueSpe($poke2, $poke1);
      }
      header("Location: " . $_SERVER['REQUEST_URI']);
      exit();
    }
 
    // Prépatation du tableau à envoyer au layout
    $data = [
      'title' => 'Liste des pokemons',
      'poke1' => $poke1,
      'poke2' => $poke2,
      'combat' => $combat,
      'modelPoke1' => $modelPoke1,
      'modelPoke2' => $modelPoke2
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
    
    $combat = new Combat($poke1, $poke2, 0);
    $combat->demarrerCombat();
    
    header('Location: /battle/fight');
    die();
    }
}