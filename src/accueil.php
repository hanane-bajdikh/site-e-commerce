<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY SHOP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="container bg-light">
            <h1 class="text-primary">MY SHOP</h1>
        </div>
    </header>

    <nav>
        <a href="accueil.php">Accueil</a>
        <a href="produits.php">Produits</a>
        <a href="panier.php">Panier</a>
        <a href="quisommenous.php">Qui Sommes Nous ?</a>

        <label for="categorie">Catégorie :</label>
        <select id="categorie" onchange="changerPageCategorie()">
            <option value="hauts">Hauts</option>
            <option value="bas">Bas</option>
            <option value="ensemble">Ensemble</option>
        </select>
    </nav>

    <img class="banner" src="photolina.jpg" alt="Bannière">

    <section>
        <h2>Derniers Articles</h2>
        <?php
        
        $articles = [
            ['nom' => 'Pantalon beige', 'prix' => 40, 'image' => 'imagevet1.jpg'],
            ['nom' => 'Trench marron', 'prix' => 50, 'image' => 'imagevet2.jpg']
        ];

        
        foreach ($articles as $article) {
            echo '<article>';
            echo '<h3>' . htmlspecialchars($article['nom']) . '</h3>';
            echo '<img src="' . htmlspecialchars($article['image']) . '" alt="' . htmlspecialchars($article['nom']) . '">';
            echo '<p>' . htmlspecialchars($article['prix']) . '€</p>';
            echo '<a href="confirmation.php?produit=' . urlencode($article['nom']) . '&prix=' . urlencode($article['prix']) . '">Ajouter au panier</a>';
            echo '</article>';
        }
        ?>
    </section>

    <footer>
        <p>&copy; MY SHOP</p>
    </footer>

    <script>
        function changerPageCategorie() {
            var categorieSelectionnee = document.getElementById("categorie").value;
            window.location.href = categorieSelectionnee + ".php";
        }
    </script>

</body>

</html>
