<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblio Numérique - <?php echo $strH1; ?></title>
    <style>
        header 
        {
            display: flex;
            background-color: #f0f0f0;
            border: solid 1px black;
            justify-content: space-evenly;
        }

        .navBar a
        {
            display: flex;
            justify-content: space-between;
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
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>

        <header>
            <div class="img">
            <a href="index.php"><img src="" alt="logo de site"></a>
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
                <a href="">Connexion</a>
            <?php
            }
            ?>

            </div>

        </header>
    
    <main>


    </main>
</body>

</html>