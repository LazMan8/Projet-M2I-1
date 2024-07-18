<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioNumérique - <?php echo $strH1; ?></title>
    <style>
        header 
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

        footer
        {
            background-color: #f0f0f0;
            border: solid 1px black;
        }
    </style>
</head>

<body>

        <header>
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

        </header>
    
    <main>


    </main>
</body>

</html>