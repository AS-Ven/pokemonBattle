<?php

class PokemonModel extends Bdd{
 
  // Constructor
  public function __construct(){
    parent::__construct();
  }
 
  // Fonction selectionnant tous les pokémons de la BDD
  public function findAll(): array
  {
    // Récupération de la BDD
    $stmt = $this->co->prepare('SELECT * FROM Pokemon');
    $stmt->execute();
 
    // Création d'une liste de pokémons
    $pokemons = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $pokemons[] = $this->parseRow($row);
    }

    return $pokemons;
  }
 
  // Fonction redistribuant les types des pokémons
  private function parseRow($row)
  {
    $rowType = $row['type'];
    switch ($rowType) {
      case 'Feu': return new PokemonFeu($row);
      case 'Eau': return new PokemonEau($row);
      case 'Plante': return new PokemonPlante($row);
      default: throw new Exception("Type $rowType non trouvé");
    }
  }

  // Fonction permettant de selectionner un seul pokemon
  public function findOneById(int $id): Pokemon | false
  {
    // Récupération de la BDD
    $pokemons = $this->co->prepare('SELECT * FROM Pokemon WHERE id = :id LIMIT 1');
    $pokemons->setFetchMode(PDO::FETCH_ASSOC);
    
    // Création du pokémon choisi
    $pokemons->execute([
      'id' => $id
    ]);
 
    return $this->parseRow($pokemons->fetch());
  }
}