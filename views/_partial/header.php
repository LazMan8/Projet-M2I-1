<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblio Numérique - <?php echo $strH1; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        header {
            background-color: #f0f0f0;
            border: solid 1px black;
        }

        .content 
        {
            min-height: calc(100vh - 100px); 

        }
    </style>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <a href="index.php"><img src="" alt="logo de site" class="img-fluid"></a>
            </div>
            <div class="col-md-10">
                <nav class="navbar navbar-expand-lg navbar-light ml-auto">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php?controller=page&action=index">Accueil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="recherche.php">Recherche</a>
                            </li>
                            <?php
                            if (isset($_SESSION['id'])) {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?controller=utilisateur&action=deconnexion">Déconnexion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Role: <?php echo $_SESSION['role']; ?></a>
                                </li>
                            <?php
                            } else {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?controller=utilisateur&action=connexion">Connexion</a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main class="container-fluid">
        <!-- Contenu de la page -->
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>