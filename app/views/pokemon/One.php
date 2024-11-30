<?php

if ($pokemon) {
  echo '<h1> Pokemon : '. $pokemon->getNom() .'</h1>';
  echo '<h2> Type : '. $pokemon->getType() .'</h2>';
  echo '<p> PV : '. $pokemon->getPointDeVie() .'</p>';
  echo '<p> Atk : '. $pokemon->getPuissanceAttaque() .'</p>';
  // echo '<p> Atk Spé : '. $pokemon->getCapaciteSpeciale() .'</p>';
  echo '<p> Def : '. $pokemon->getDefense() .'</p>';
}
else{
  echo '<p>Pokemon introuvable</p>';
}