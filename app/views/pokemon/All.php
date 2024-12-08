<div class="tous">

<div class="bt_Type_F">
    <p class="P"> Feu </p>
    <img class="I" src="/assets/image/feu.png" alt="energy pokemon feu">
</div>

<div class="bt_Type_P">
    <p class="P"> Plante </p>
    <img class="I" src="/assets/image/plante.png" alt="energy pokemon plante">
</div>

<div class="bt_Type_E">
    <p class="P"> Eau </p>
    <img class="I" src="/assets/image/eau.png" alt="energy pokemon eau">
</div>

</div>

<div class="swiper">
<div class="swiper-wrapper">

<?php

foreach ($pokemons as $pokemon) {
    echo "<div class='swiper-slide'>";
        $typeClass = strtolower($pokemon->getType());
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
}

?>

</div>
</div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>

<div class="combat">
<a class="bt_combat" href="/battle/select"> DEMARRER UN COMBAT </a>
</div>


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
