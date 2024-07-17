<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <style>
    body {
        font-family: sans-serif;
        margin: 0;
    }

    .navBar {
        background-color: #f0f0f0;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navBar a {
        color: #333;
        text-decoration: none;
        margin-right: 20px;
    }

    .navBar a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="navBar">
        <a href="index.php">Accueil</a>
        <a href="recherche.php">Recherche</a>
        <?php
        if (isset($_SESSION['user_id'])) {
            ?>
        <a href="deconnexion.php">Déconnexion</a>
        <a href="#">Role: <?php echo $_SESSION['role']; ?></a>
        <?php
        } else {
            ?>
        <a href="connexion.php">Connexion</a>
        <?php
        }
        ?>
    </div>

    <main>
    </main>
</body>

</html>