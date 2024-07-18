
<h1>BIENVENUE SUR QUARTIER LIB</h1>
<div class="row mb-2">
    <form name="formSearch" method ="post" action="#">
        <fieldset>
            <legend>Rechercher des livres</legend>
           
             <p>
                <label for="titre">Titre</label>
                <input id="titre" type="text" name="titre" value="<?php echo $_POST['titre']??""; ?>" />
            </p>
            <p>
                <label for="nomAuteur">Nom de l'auteur</label>
                <input id="nomAuteur" type ="text" name="nomAuteur" value="<?php echo $_POST['nomAuteur']??""; ?>" />
            </p>
            <p>
                <label for="anneeParution">Année de parution</label>
                <input id="anneeParution" type = "number" name="anneeParution" value="<?php echo $_POST['anneeParution']??""; ?>" />
            </p>
            <p>
                <label for="genre">Genre</label>
                <input id="genre" type ="text" name="genre" value="<?php echo $_POST['genre']??""; ?>" />
            </p>
            <p>
                <input type = "submit" value="Rechercher" />
                <input type= "reset" value ="Réinitialiser"/>
            </p>
        </fieldset>
    </form>

    <?php

    // Parcourir le tableau des livres



    foreach($arrBookToDisplay as $objBook){
        include("book.php");
    }

    ?>
    </div>
    


    
    



            





