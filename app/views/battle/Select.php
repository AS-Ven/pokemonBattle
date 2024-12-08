<?php

echo '<form method="post" action="/battle/start">';
echo '<fieldset class="pokemon-cards">';
foreach ($pokemons as $pokemon) {
    echo '<div class="">';
        echo '<h1>Pokemon: ' . $pokemon->getNom() . '</h1>';
        echo '<h2>Type: ' . $pokemon->getType() . '</h2>';
        // echo '<img src="' . $pokemon->getImg() . '" alt="image pokemon">';
        echo '<p>PV: ' . $pokemon->getPointsDeVie() . '</p>';
        echo '<div class="">';
            echo '<span>Atk: ' . $pokemon->getPuissanceAttaque() . '</span>';
            echo '<span>Def: ' . $pokemon->getDefense() . '</span>';
        echo '</div>';
        echo '<p class="weakness">Faiblesse: '. $pokemon->getFaiblesse()  .'</p>';
        echo '<p class="resistance">Résistance: '  . '</p>';
        echo '<div>';
            echo '<input type="radio" id="pokemon1" name="poke1" value="'. $pokemon->getId() . '"/>';
        echo '</div>';
    echo '</div>';
}
echo '</fieldset>';

echo '<input type="submit" name="start" value="start"/>';

echo '<fieldset class="pokemon-cards">';
foreach ($pokemons as $pokemon) {
    echo '<div class="">';
    echo '<h1>Pokemon: ' . $pokemon->getNom() . '</h1>';
    echo '<h2>Type: ' . $pokemon->getType() . '</h2>';
    // echo '<img src="' . $pokemon->getImg() . '" alt="image pokemon">';
    echo '<p>PV: ' . $pokemon->getPointsDeVie() . '</p>';
    echo '<div class="">';
    echo '<span>Atk: ' . $pokemon->getPuissanceAttaque() . '</span>';
    echo '<span>Def: ' . $pokemon->getDefense() . '</span>';
    echo '</div>';
    echo '<p class="weakness">Faiblesse: '. $pokemon->getFaiblesse()  .'</p>';
    echo '<p class="resistance">Résistance: '  . '</p>';
    echo '<div>';
    echo '<input type="radio" id="pokemon2" name="poke2" value="'. $pokemon->getId() . '"/>';
    echo '</div>';
    echo '</div>';
}
echo '</fieldset>';
echo '</form>';