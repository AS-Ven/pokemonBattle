<?php

echo '<div class="tous">';

echo '<div class="bt_Type_F">';
echo '<p class="P"> Feu'.'</p>';
echo '<img class="I" src="/assets/image/feu.png" alt="energy pokemon feu">';
echo '</div>';

echo '<div class="bt_Type_P">';
echo '<p class="P"> Plante'.'</p>';
echo '<img class="I" src="/assets/image/plante.png" alt="energy pokemon plante">';
echo '</div>';

echo '<div class="bt_Type_E">';
echo '<p class="P"> Eau'.'</p>';
echo '<img class="I" src="/assets/image/eau.png" alt="energy pokemon eau">';
echo '</div>';

echo '</div>';

echo '<div class="swiper">';
echo '<div class="swiper-wrapper">';

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

            echo '<div class="bar" >';
                echo '<p class="HP" >HP : ' . $pokemon->getPointsDeVie() . '</p>';
            echo '</div>';
            echo '<div class="bar" >';
                echo '<p class="DEF" >DEF : ' . $pokemon->getDefense() . '</p>';
            echo '</div>';

            echo '<div class="G_atk">';
                echo '<div class="l_atk">';
                    echo '<p class="nom_atk" >' . $pokemon->getNomAtk() . '</p>';
                    echo '<p class="g_atk" >' . $pokemon->getPuissanceAttaque() . '</p>';
                echo '</div>';
                echo '<div class="l_atk">';
                    echo '<p class="nom_atk" >' . $pokemon->getNomAtkSpe() . '</p>';
                    echo '<p class="g_atk" >' . $pokemon->getPuissanceAttaque() . '</p>';
                echo '</div>';
            echo '</div>';

            echo '<div>';
                echo '<p class="weakness">Faiblesse : ' . $pokemon->getFaiblesse() . '</p>';
            echo '</div>';

        echo '</div>';
    echo '</div>';
}

echo '</div>';
echo '</div>';

echo '<div class="swiper-button-prev"></div><div class="swiper-button-next"></div>';



echo '<div class="combat">';
echo '<a class="bt_combat" href="/battle/select"> DEMARRER UN COMBAT'.'</a>';
echo '</div>';

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
