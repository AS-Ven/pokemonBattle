<?php
echo '<div class="swiper">';
echo '<div class="swiper-wrapper">';
foreach ($pokemons as $pokemon) {
    echo "<div class='swiper-slide'>";
    $typeClass = strtolower($pokemon->getType());
    echo '<div class="pokemon-card ' . $typeClass . '">';
    echo '<img class="tes" src="/assets/image/teste.avif" alt="">'; // Image superposée
    echo '<div class="Top">';
    echo '<h1>' . $pokemon->getNom() . '</h1>';
    // echo '<h2>' . $pokemon->getType() . '</h2>';
    echo '<img class="img_type" src="' . $pokemon->getEnergy() . '" alt="energy pokemon">';
    echo '</div>';
    echo '<img class="img_poke" src="' . $pokemon->getImg() . '" alt="image pokemon">';
    echo '<p>HP : ' . $pokemon->getPointsDeVie() . '</p>';
    echo '<div class="stats">';
    echo '<span>Atk: ' . $pokemon->getPuissanceAttaque() . '</span>';
    echo '<span>Def: ' . $pokemon->getDefense() . '</span>';
    echo '</div>';
    echo '<p class="weakness">Faiblesse: ' . $pokemon->getFaiblesse() . '</p>';
    echo '<p class="resistance">Résistance ' . '</p>';
    echo '</div>';
    echo '</div>';

}

echo '</div>';
echo '</div>';
echo '<div class="swiper-button-prev"></div><div class="swiper-button-next"></div>';





echo '<a href="/app/views/battle/Fight.php"> DEMARRER UN COMBAT'.'</a>';

?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const swiper = new Swiper(".swiper", {
        slidesPerView: 5,
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