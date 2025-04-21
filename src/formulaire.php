<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Paiement</h1>
    </header>

    <section class="payment-section">
        <h2>Coordonnées de l'acheteur</h2>
        <img src="liv.jpg" alt="livraison">

        <form action="process_payment.php" method="post">
            <label for="nom">Nom :</label>
            <ul><input type="text" id="nom" name="nom" required></ul>

            <label for="prenom">Prénom :</label>
            <ul><input type="text" id="prenom" name="prenom" required></ul>

            <label for="email">Email :</label>
            <ul><input type="email" id="email" name="email" required></ul>

            <label for="adresse">Adresse :</label>
            <ul><input type="text" id="adresse" name="adresse" required></ul>

            <label for="code_postal">Code postal :</label>
            <ul><input type="text" id="code_postal" name="code_postal" required></ul>

            <label for="ville">Ville :</label>
            <ul><input type="text" id="ville" name="ville" required></ul>

            <label for="pays">Pays :</label>
            <ul><input type="text" id="pays" name="pays" required></ul>

            <label for="numero_carte">Numéro de carte de crédit :</label>
            <ul><input type="text" id="numero_carte" name="numero_carte" required></ul>

            <label for="date_expiration">Date d'expiration :</label>
            <ul><input type="text" id="date_expiration" name="date_expiration" placeholder="MM/AA" required></ul>

            <label for="code_securite">Code de sécurité :</label>
            <ul><input type="text" id="code_securite" name="code_securite" required></ul>

            <button type="submit">Valider le paiement</button>
        </form>
    </section>

    <footer>
        <p>&copy; MY SHOP</p>
    </footer>

</body>

</html>