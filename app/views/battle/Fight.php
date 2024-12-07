<?php

echo '<form method="post">';
echo '<input type="submit" name="start" value="start"/>';
echo '</form>';

if(array_key_exists('start', $_POST)) {
      $_SESSION['$poke1newHP'] = $poke1->getPointsDeVie();
      $_SESSION['$poke2newHP'] = $poke2->getPointsDeVie();
}

#region If

// Poke1
if(array_key_exists('poke1heal', $_POST)) {
    $poke1->soigner();

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}
if(array_key_exists('poke1atk', $_POST)) {
    $poke1->attaquer($poke2);

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}
if(array_key_exists('poke1atkspe', $_POST)) {
    $poke1->capaciteSpeciale($poke2);

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}

// Poke2
if(array_key_exists('poke2heal', $_POST)) {
    $_SESSION[$poke2->getId() . 'newHP'] = $poke2->soigner();

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}
if(array_key_exists('poke2atk', $_POST)) {
    $_SESSION[$poke1->getId() . 'newHP'] = $poke2->attaquer($poke1);

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}
if(array_key_exists('poke2atkspe', $_POST)) {
    $poke2->capaciteSpeciale($poke1);

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}

#endregion



#region Poke1

echo '<div class="pokemon-card">';
echo '<h1>Pokemon: ' . $poke1->getNom() . '</h1>';
echo '<h2>Type: ' . $poke1->getType() . '</h2>';
// echo '<img src="' . $pokemon->getImg() . '" alt="image pokemon">';
if(!$_SESSION[$poke1->getId() . 'newHP']){
    echo '<p>PV: ' . $poke1->getPointsDeVie() . ' / ' . $poke1->getPointsDeVie() . '</p>';
} else {
    echo '<p>PV: ' . $_SESSION[$poke1->getId() . 'newHP'] . ' / ' . $poke1->getPointsDeVie() . '</p>';
}
echo '<div class="stats">';
echo '<span>Atk: ' . $poke1->getPuissanceAttaque() . '</span>';
echo '<span>Def: ' . $poke1->getDefense() . '</span>';
echo '</div>';
echo '<p class="weakness">Faiblesse: '. $poke1->getFaiblesse()  .'</p>';
echo '<p class="resistance">Résistance: '  . '</p>';
echo '</div>';

echo '<form method="post">';
echo '<input type="submit" name="poke1heal" value="hp+"/>';

echo '<input type="submit" name="poke1atk" value="hp-"/>';
echo '<input type="submit" name="poke1atkspe" value="hp--"/>';
echo '</form>';

#endregion



#region Poke2

echo '<div class="pokemon-card">';
echo '<h1>Pokemon: ' . $poke2->getNom() . '</h1>';
echo '<h2>Type: ' . $poke2->getType() . '</h2>';
// echo '<img src="' . $pokemon->getImg() . '" alt="image pokemon">';
if(!$_SESSION[$poke2->getId() . 'newHP']){
    echo '<p>PV: ' . $poke2->getPointsDeVie() . ' / ' . $poke2->getPointsDeVie() . '</p>';
} else {
    echo '<p>PV: ' . $_SESSION[$poke2->getId() . 'newHP'] . ' / ' . $poke2->getPointsDeVie() . '</p>';
}
echo '<div class="stats">';
echo '<span>Atk: ' . $poke2->getPuissanceAttaque() . '</span>';
echo '<span>Def: ' . $poke2->getDefense() . '</span>';
echo '</div>';
echo '<p class="weakness">Faiblesse: '. $poke2->getFaiblesse()  .'</p>';
echo '<p class="resistance">Résistance: '  . '</p>';
echo '</div>';

echo '<form method="post">';
echo '<input type="submit" name="poke2heal" value="hp+"/>';

echo '<input type="submit" name="poke2atk" value="hp-"/>';
echo '<input type="submit" name="poke2atkspe" value="hp--"/>';
echo '</form>';

#endregion