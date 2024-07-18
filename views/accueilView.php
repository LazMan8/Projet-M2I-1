<?php

if (isset($_SESSION['id']) && $_SESSION['id'] !=''){
    ?>
    <p><a alt="Ajouter un livre"href="index.php?controller=livre&action=addBook">Ajouter un livre</a><p>
    <?php

}
// Parcourir le tableau des livres

foreach($arrBookToDisplay as $objLivre){
    include("book.php");
}
?>