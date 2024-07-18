<?php

require ('connexion.php');


// AJOUT D'UN LIVRE AVEC INSERT INTO

$strQuery="INSERT INTO livre(titre, nomAuteur, prenomAuteur, livreContenu, anneeParution, genre, images) VALUES (:titre, :nomAuteur, :prenomAuteur, :livreContenu, :anneeParution, :genre, :images";

//prépartion


$insertBook = $this-> _db ->prepare($strQuery);

// Exécution pour que le livre soit dans la base de données

$insertBook ->execute ([
    "titre" => $_POST["titre"],
    "nomAuteur" => $_POST["nomAuteur"],
    "prenomAuteur" => $_POST["prenomAuteur"],
    "livreContenu" => $_POST["livreContenu"],
    "annneeParution" => $_POST["anneeParution"],
    "genre" => $_POST["genre"],
    "images"=> $_POST["images"]

]);

echo"Le livre ". $_POST["titre"]." a bien été ajouté à l'auteur ".$_POST["nomAuteur"]." ".$_POST["prenomAuteur"]."<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de livres</title>

</head>
<body>
<form action="index.php" method="POST">
    <button type="submit" class="btn btn-primary">Retour page accueil</button>

    </form> 
    
</body>
</html>