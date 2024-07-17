<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body 
        {
            background-color: #f0f0f0;
            border: solid 1px black;
        }

        .navBar 
        {
            display: flex;
            justify-content: center;
        }
        .img 
        {
            display: flex;
            justify-content: space-between; 
        }
    </style>
</head>

<body>

    <div class="img">
        <img src="" alt="logo du site">
    </div>
    <div class="navBar">
        <a href="index.php">Accueil</a>
        <a href="recherche.php">Recherche</a>
        <?php
            if (isset($_SESSION['user_id'])) 
            {
            ?>
        <a href="deconnexion.php">Déconnexion</a>
        <a href="#">Role: <?php echo $_SESSION['role']; ?></a>
        <?php
                } 
                else 
                {
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