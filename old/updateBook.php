<?php

require ("connexion.php");

// Mise à jour d'un livre avec update et set
$strQuery = "UPDATE livre SET titre=:titre, nomAuteur=:nomAuteur, prenomAuteur=:prenomAuteur, livreContenu=:livreContenu, anneeParution=:anneeParution, genre=:genre, images=:images WHERE titre=:titre ";

// Préparation

$updateBook = $this->_db ->prepare($strQuery);

$updateBook ->execute([
    "titre"=> $_POST["titre"],
    "nomAuteur"=> $_POST["nomAuteur"],
    "prenomAuteur"=> $_POST["prenomAuteur"],
    "livreContenu"=>$_POST["livreContenu"],
    "anneParution"=>$_POST["anneeParution"],
    "genre"=>$_POST["genre"],
    "images"=>$_POST["images"]
]);

echo "Le livre ". $_POST["titre"]." a bien été mis à jour dans l'auteur ". $_POST["nomAuteur"]." ". $_POST["prenomAuteur"]."<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour livre</title>
</head>
<body>
    <form action="index.php" method="POST">
    <button type="submit" class="btn btn-primary">Retour page accueil</button>

    </form>
</body>
</html>

