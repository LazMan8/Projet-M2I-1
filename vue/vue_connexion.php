<h1><?= $strH1 ?></h1>
<p><?= $strPar ?></p>

<form action="<?php echo URL ?>connexion/validate" method="post">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Se connecter">
</form>