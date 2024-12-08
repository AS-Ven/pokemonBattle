<?php

if (!$combat->determinerVainqueur()){
    echo 'Au combat !';
} else {
    echo $combat->determinerVainqueur()->getNom() . ' a gagné !';
}

#region Poke1

echo '<div class="pokemon-card">';
echo '<h1>Pokemon: ' . $poke1->getNom() . '</h1>';
echo '<h2>Type: ' . $poke1->getType() . '</h2>';
echo '<p>PV: ' . $poke1->getPointsDeVie() . ' / ' . $modelPoke1->getPointsDeVie() . '</p>';
echo '<div class="stats">';
echo '<span>Atk: ' . $poke1->getPuissanceAttaque() . '</span>';
echo '<span>Def: ' . $poke1->getDefense() . '</span>';
echo '</div>';
echo '<p class="weakness">Faiblesse: '. $poke1->getFaiblesse()  .'</p>';
echo '<p class="resistance">Résistance: '  . '</p>';

echo '<form method="post">';

echo '<input type="submit" name="poke1atk" value="Attaque"/>';
echo '<input type="submit" name="poke1atkspe" value="Attaque Spé"/>';
echo '</form>';

echo '</div>';

#endregion



#region Poke2

echo '<div class="pokemon-card">';
echo '<h1>Pokemon: ' . $poke2->getNom() . '</h1>';
echo '<h2>Type: ' . $poke2->getType() . '</h2>';
echo '<p>PV: ' . $poke2->getPointsDeVie() . ' / ' . $modelPoke2->getPointsDeVie() . '</p>';
echo '<div class="stats">';
echo '<span>Atk: ' . $poke2->getPuissanceAttaque() . '</span>';
echo '<span>Def: ' . $poke2->getDefense() . '</span>';
echo '</div>';
echo '<p class="weakness">Faiblesse: '. $poke2->getFaiblesse()  .'</p>';
echo '<p class="resistance">Résistance: '  . '</p>';

echo '<form method="post">';

echo '<input type="submit" name="poke2atk" value="Attaque"/>';
echo '<input type="submit" name="poke2atkspe" value="Attaque Spé"/>';
echo '</form>';

echo '</div>';

#endregion