<?php

class PokemonModel extends Bdd{
 
  public function __construct(){
    parent::__construct();
  }
 
  public function findAll(): array
  {
    $stmt = $this->co->prepare('SELECT * FROM Pokemon');
    $stmt->execute();
 
    $pokemons = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $pokemons[] = $this->parseRow($row);
    }

    return $pokemons;
  }
 
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

  public function findOneById(int $id): Pokemon | false
  {
    $pokemons = $this->co->prepare('SELECT * FROM Pokemon WHERE id = :id LIMIT 1');
    $pokemons->setFetchMode(PDO::FETCH_ASSOC);
    
    $pokemons->execute([
      'id' => $id
    ]);
 
    return $this->parseRow($pokemons->fetch());
  }
}