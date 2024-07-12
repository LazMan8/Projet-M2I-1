<?php

require ("connexion.php");

// Afficher tous les livres de la base de données

$strQuery = "SELECT * FROM titre";

//Préparation
$bookStatement = $this->_db -> prepare($strQuery);

//Exécution

$bookStatement -> execute();
$titre = $bookStatement->fetchAll();

//Affichage


foreach($titre as $titres){
    ?>
    <p><?php echo"Liste des livres disponibles <br>". $titres["titre"]; ?><p>
<?php
}