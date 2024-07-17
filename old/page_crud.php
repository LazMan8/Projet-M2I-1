<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page C R U D</title>
</head>
<body>
    <h1> BONJOUR ET BIENVENUE SUR LE SITE QUARTIER LIB</h1>

    <form action="/PROJET/projet120724/PROJET/projetHTML/models/listBook.php" method="POST">
        <button type="submit" class="btn btn-primary">LISTE DES LIVRES</button>

    </form>

    <form action="/PROJET/projet120724/PROJET/projetHTML/models/addBook.php" method="POST">
        <button type="submit" class="btn btn-primary">AJOUT DE LIVRES</button>

    </form>

    <form action="/PROJET/projet120724/PROJET/projetHTML/models/updateBook.php" method="POST">
        <button type="submit" class="btn btn-primary">MISE A JOUR DES LIVRES</button>

    </form>


    <form action="/PROJET/projet120724/PROJET/projetHTML/models/delBook.php" method="POST">
        <button type="submit" class="btn btn-primary">EFFACEMENT DE LIVRES</button>

    </form>
    
</body>
</html>