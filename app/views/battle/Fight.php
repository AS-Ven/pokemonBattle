<?php

echo '<div class="g-vic" >';
echo '<div class="vic" >';
echo $combat->getAction();
echo '</div>';
echo '</div>';

echo '<div class="g-vic" >';
echo '<div class="vic" >';
if (!$combat->determinerVainqueur()){
    if(!$combat->getStatus())
    {
        echo 'Au tour de ' . $poke1->getNom();
    }
    else
    {
        echo 'Au tour de ' . $poke2->getNom();
    }
} else {
    echo $combat->determinerVainqueur()->getNom() . ' a gagné !';
}
echo '</div>';
echo '</div>';

?>
<div class="all">

<div class="pokemon-card <?= strtolower($poke1->getType()) ?>">
    <img class="effet_grain" src="/assets/image/teste.avif" alt="">

    <div class="Top">
        <h1 class="nom_poke"><?= $poke1->getNom() ?></h1>
        <img class="img_type" src="<?= $poke1->getEnergy() ?>" alt="energy pokemon">
    </div>
    <img class="img_poke" src="<?= $poke1->getImg() ?>" alt="image pokemon">

    <div class="bar bar-hp" style="--bar: <?= $poke1->getPointsDeVie() / $modelPoke1->getPointsDeVie() * 100 ?>%" >
        <p class="HP" >HP : <?= $poke1->getPointsDeVie() ?> / <?= $modelPoke1->getPointsDeVie() ?></p>
    </div>
    <div class="bar" >
        <p class="DEF" >DEF : <?= $poke1->getDefense() * 100 ?></p>
    </div>

    <div class="G_atk">
        <form method="post">
            <div class="l_atk">
                <input class="nom_atk" type="submit" name="poke1atk" value="<?= $poke1->getNomAtk() ?>"/>
                <p class="g_atk" ><?= $poke1->getPuissanceAttaque() ?></p>
            </div>
            <div class="l_atk">
                <input class="nom_atk" type="submit" name="poke1atkspe" value="<?= $poke1->getNomAtkSpe() ?>"/>
                <p class="g_atk" ><?= $poke1->getPuissanceAttaque() * ($poke1->getCharge() * 0.5) ?></p>
            </div>
        </form>
    </div>

    <div>
        <p class="weakness">Faiblesse : <?= $poke1->getFaiblesse() ?></p>
    </div>

</div>

<img class="vs" src="/assets/image/Combat-Versus.png" alt="">

<div class="pokemon-card <?= strtolower($poke2->getType()) ?>">
    <img class="effet_grain" src="/assets/image/teste.avif" alt="">

    <div class="Top">
        <h1 class="nom_poke"><?= $poke2->getNom() ?></h1>
        <img class="img_type" src="<?= $poke2->getEnergy() ?>" alt="energy pokemon">
    </div>
    <img class="img_poke" src="<?= $poke2->getImg() ?>" alt="image pokemon">

    <div class="bar bar-hp" style="--bar: <?= $poke2->getPointsDeVie() / $modelPoke2->getPointsDeVie() * 100 ?>%" >
        <p class="HP" >HP : <?= $poke2->getPointsDeVie() ?> / <?= $modelPoke2->getPointsDeVie() ?></p>
    </div>
    <div class="bar" >
        <p class="DEF" >DEF : <?= $poke2->getDefense() * 100 ?></p>
    </div>

    <div class="G_atk">
        <form method="post">
            <div class="l_atk">
                <input class="nom_atk" type="submit" name="poke2atk" value="<?= $poke2->getNomAtk() ?>"/>
                <p class="g_atk" ><?= $poke2->getPuissanceAttaque() ?></p>
            </div>
            <div class="l_atk">
                <input class="nom_atk" type="submit" name="poke2atkspe" value="<?= $poke2->getNomAtkSpe() ?>"/>
                <p class="g_atk" ><?= $poke2->getPuissanceAttaque() * ($poke2->getCharge() * 0.5) ?></p>
            </div>
        </form>
    </div>

    <div>
        <p class="weakness">Faiblesse : <?= $poke2->getFaiblesse() ?></p>
    </div>

</div>

</div>