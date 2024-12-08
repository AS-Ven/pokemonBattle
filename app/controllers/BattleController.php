<?php

require_once './app/utils/Render.php';

class BattleController{
  use Render;

  #region Fight

  // Fonction d'affichage de la page battle/fight
  public function fight(): void
  {
    // Récupération du combat
    $combat = Combat::getCombat();
    $poke1 = $combat->getPokemon1();
    $poke2 = $combat->getPokemon2();

    // Création des modèles des combattants
    $pokemonModel = new PokemonModel();
    $modelPoke1 = $pokemonModel->findOneById($poke1->getId());
    $modelPoke2 = $pokemonModel->findOneById($poke2->getId());

    #region Input

    // Attaque du combattant 1
    if(isset($_POST['poke1atk'])){
      if($combat->getStatus() == 0 && !$combat->determinerVainqueur($modelPoke1, $modelPoke2)){ 
        $combat->tourDeCombat($poke1, $poke2);
      }
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();
    }
    // Attaque du combattant 2
    if(isset($_POST['poke2atk'])){
      if($combat->getStatus() == 1 && !$combat->determinerVainqueur($modelPoke1, $modelPoke2)){ 
        $combat->tourDeCombat($poke2, $poke1);
      }
      header("Location: " . $_SERVER['REQUEST_URI']);
      exit();
    }

    // Attaque Spé du combattant 1
    if(isset($_POST['poke1atkspe'])){
      if($combat->getStatus() == 0 && !$combat->determinerVainqueur($modelPoke1, $modelPoke2)){ 
        $combat->utiliserAttaqueSpe($poke1, $poke2);
      }
      header("Location: " . $_SERVER['REQUEST_URI']);
      exit();
    }
    // Attaque Spé du combattant 2
    if(isset($_POST['poke2atkspe'])){
      if($combat->getStatus() == 1 && !$combat->determinerVainqueur($modelPoke1, $modelPoke2)){ 
        $combat->utiliserAttaqueSpe($poke2, $poke1);
      }
      header("Location: " . $_SERVER['REQUEST_URI']);
      exit();
    }

    #endregion
 
    // Donnés envoyées à la view
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

  #endregion



  #region Select

  // Fonction d'affiche de la page battle/select
  public function select(): void
  {
    // Création d'une liste de pokémons
    $pokemonModel = new PokemonModel();
    $pokemons = $pokemonModel->findAll();
 
    // Donnés envoyées à la view
    $data = [
      'title' => 'Phase de Combat !',
      'pokemons' => $pokemons
    ];
 
    // Rendu avec layout
    $this->renderView('battle/select', $data);
  }

  // Fonction de lancement de combat
  public function start()
  {
    // Renvoie vers la page de sélection tant que les deux pokémons ne sont pas choisis
    if(!isset($_POST['poke1']) || !isset($_POST['poke2'])){
      header('Location: /battle/select');
      die();
    }

    // Création des modèles de pokémons
    $pokemonModel = new PokemonModel();
    $poke1 = $pokemonModel->findOneById($_POST['poke1']);
    $poke2 = $pokemonModel->findOneById($_POST['poke2']);
    
    // Création de l'instance de combat
    $combat = new Combat($poke1, $poke2, 1);
    $combat->demarrerCombat();
    
    // Redirection vers le combat
    header('Location: /battle/fight');
    die();
    }

    #endregion
}