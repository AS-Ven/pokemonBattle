
<form method="post" action="/battle/start">
<div class="swiper">
<fieldset class="pokemon-cards swiper-wrapper">
            
<?php

foreach ($pokemons as $pokemon) {
    echo "<div class='swiper-slide'>";
        $typeClass = strtolower($pokemon->getType());
        echo '<div class="stp">';
        echo '<div class="pokemon-card ' . $typeClass . '">';
            echo '<img class="effet_grain" src="/assets/image/teste.avif" alt="">';

            echo '<div class="Top">';
                echo '<h1 class="nom_poke">' . $pokemon->getNom() . '</h1>';
                echo '<img class="img_type" src="' . $pokemon->getEnergy() . '" alt="energy pokemon">';
            echo '</div>';
            echo '<img class="img_poke" src="' . $pokemon->getImg() . '" alt="image pokemon">';

            echo '<div class="bar bar-hp" >';
                echo '<p class="HP" >HP : ' . $pokemon->getPointsDeVie() . '</p>';
            echo '</div>';
            echo '<div class="bar" >';
                echo '<p class="DEF" >DEF : ' . $pokemon->getDefense() * 100 . '</p>';
            echo '</div>';

            echo '<div class="G_atk">';
                echo '<div class="l_atk">';
                    echo '<p class="nom_atk" >' . $pokemon->getNomAtk() . '</p>';
                    echo '<p class="g_atk" >' . $pokemon->getPuissanceAttaque() . '</p>';
                echo '</div>';
                echo '<div class="l_atk">';
                    echo '<p class="nom_atk" >' . $pokemon->getNomAtkSpe() . '</p>';
                    echo '<p class="g_atk" >' . $pokemon->getPuissanceAttaque() * ($pokemon->getCharge() * 0.5) . '</p>';
                echo '</div>';
            echo '</div>';

            echo '<div>';
                echo '<p class="weakness">Faiblesse : ' . $pokemon->getFaiblesse() . '</p>';
            echo '</div>';

    
        echo '</div>';
        echo '<input class="rad" type="radio" id="pokemon1" name="poke1" value="'. $pokemon->getId() . '"/>';
        echo '</div>';
    echo '</div>';
}

?>

</fieldset>
</div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>

<div class="bt_start">
    <input class="start" type="submit" name="start" value="Démarrer les combats"/>
</div>

<div class="swiper">
<fieldset class="pokemon-cards swiper-wrapper">

<?php

foreach ($pokemons as $pokemon) {
    echo "<div class='swiper-slide'>";
        $typeClass = strtolower($pokemon->getType());
        echo '<div class="stp">';
        echo '<input class="rad2" type="radio" id="pokemon2" name="poke2" value="'. $pokemon->getId() . '"/>';
        echo '<div class="pokemon-card ' . $typeClass . '">';
            echo '<img class="effet_grain" src="/assets/image/teste.avif" alt="">';

            echo '<div class="Top">';
                echo '<h1 class="nom_poke">' . $pokemon->getNom() . '</h1>';
                echo '<img class="img_type" src="' . $pokemon->getEnergy() . '" alt="energy pokemon">';
            echo '</div>';
            echo '<img class="img_poke" src="' . $pokemon->getImg() . '" alt="image pokemon">';

            echo '<div class="bar bar-hp" >';
                echo '<p class="HP" >HP : ' . $pokemon->getPointsDeVie() . '</p>';
            echo '</div>';
            echo '<div class="bar" >';
                echo '<p class="DEF" >DEF : ' . $pokemon->getDefense() * 100 . '</p>';
            echo '</div>';

            echo '<div class="G_atk">';
                echo '<div class="l_atk">';
                    echo '<p class="nom_atk" >' . $pokemon->getNomAtk() . '</p>';
                    echo '<p class="g_atk" >' . $pokemon->getPuissanceAttaque() . '</p>';
                echo '</div>';
                echo '<div class="l_atk">';
                    echo '<p class="nom_atk" >' . $pokemon->getNomAtkSpe() . '</p>';
                    echo '<p class="g_atk" >' . $pokemon->getPuissanceAttaque() * ($pokemon->getCharge() * 0.5) . '</p>';
                echo '</div>';
            echo '</div>';

            echo '<div>';
                echo '<p class="weakness">Faiblesse : ' . $pokemon->getFaiblesse() . '</p>';
            echo '</div>';

    
        echo '</div>';
        echo '</div>';
    echo '</div>';
}

?>

</fieldset>
</div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
</form>
    
?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const swiper = new Swiper(".swiper", {
        breakpoints:{
            0: {slidesPerView:1},
            810: {slidesPerView:2},
            1180: {slidesPerView:3},
            1550: {slidesPerView:4},
        },
        centeredSlides: true,
        spaceBetween: 70,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
    })
</script>