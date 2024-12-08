<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? 'Mon titre par défaut' ?></title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
    <img class="poke" src="/assets/image/pokemon_logo.png" alt="POKEMON">
        <!-- <nav>
            <a href="/pokemon/findAll">Liste des utilisateurs</a>
        </nav> -->
    </header>
    
    <main>
        <?php echo $content ?? '<p>Aucun contenu à afficher</p>' ?>
    </main>
    
    <footer>
    </footer>
    <script src="/assets/js/3D_cart.js"></script>
</body>
</html>