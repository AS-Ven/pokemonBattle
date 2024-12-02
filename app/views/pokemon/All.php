<?php

foreach ($pokemons as $pokemon) {
  echo '<div class="pokemon-card">';
  echo '<h1>Pokemon: ' . $pokemon->getNom() . '</h1>';
  echo '<h2>Type: ' . $pokemon->getType() . '</h2>';
  echo '<img src="' . $pokemon->getImg() . '" alt="image pokemon">';
  echo '<p>PV: ' . $pokemon->getPointDeVie() . '</p>';
  echo '<div class="stats">';
  echo '<span>Atk: ' . $pokemon->getPuissanceAttaque() . '</span>';
  echo '<span>Def: ' . $pokemon->getDefense() . '</span>';
  echo '</div>';
  echo '<p class="weakness">Faiblesse: '. $pokemon->getFaiblesse()  .'</p>';
  echo '<p class="resistance">Résistance: '  . '</p>';
  echo '</div>';
}