

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Assets/css/style.css?v=1">
    <title>projet</title>
</head>
<header>
        <?php
        if (isset($_SESSION['id'])) 
        {
            ?>
            <ul>
                <li>
                <a href="index.php?page=deconnexion">Se déconnecter</a>
                </li>
            </ul>
            <?php
        } 
            ?>
            <nav>
        <a class="link" href="index.php?page=gestionRole">Gestion de rôles</a>
        <a class="link" href="index.php?page=affectationRole">Affectation de rôles</a>
        <a class="link" href="index.php?page=definitionRole">Définition de rôles</a>
        <a class="link" href="index.php?page=login">Connexion</a>
      </nav>
</header>
</html>