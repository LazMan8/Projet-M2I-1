<?php
?>
<h1>BIENVENUE SUR Quartier Lib</h1>

<!--<form action="index.php?controller=livre&action=addBook" method="post">-->
<form name="formAdd" method ="post" action="#">
    
    <p>
        <label for="titre">Titre</label>
        <input id ="titre" name="titre" type="text" value="" >
    </p>

    <p>
        <label for="nomAuteur">Nom de l'auteur</label>
        <input id="nomAuteur" name="nomAuteur" type="text" value="">
    </p>

    <p>
        <label for="prenomAuteur">Prenom de l'auteur</label>
        <input id="prenomAuteur" name="prenomAuteur" type = "text" value="">
    </p>

    <p>
        <label for="anneeParution">Année de parution</label>
        <input id="anneeParution" name ="anneeParution" type="number" value="">

    </p>

    <p>
        <label for="genre">Genre</label>
        <input id="genre" name="genre" type="text" value="">

    </p>
    <p>
        <label>Image</label>
        <input id="image" name="image"  type="file" value="">
    </p>
    <p>
        <label>Contenu</label>
        <textarea></textarea>
    </p>
    <p>
        
        <input class="form-control btn btn-primary" type = "submit" value="Ajouter" />
    </p>
</form>