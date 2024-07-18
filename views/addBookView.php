<h1><?= $strH1 ?></h1>
<p><?= $strPar ?></p>

<form method="post">
    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" required><br><br>

    <label for="nomAuteur">Nom de l'auteur :</label>
    <input type="text" id="nomAuteur" name="nomAuteur" required><br><br>

    <label for="prenomAuteur">Prénom de l'auteur :</label>
    <input type="text" id="prenomAuteur" name="prenomAuteur" required><br><br>

    <label for="livreContenu">Contenu du livre :</label>
    <textarea id="livreContenu" name="livreContenu" required></textarea><br><br>

    <label for="anneeParution">Année de parution :</label>
    <input type="number" id="anneeParution" name="anneeParution" required><br><br>

    <label for="images">Images :</label>
    <input type="file" name="images" accept="images/*"><br><br>

    <label for="idGenre">Genre :</label>
    <input type="number" id="idGenre" name="idGenre" required><br><br>

    <input type="submit" value="Ajouter le livre">

</form>