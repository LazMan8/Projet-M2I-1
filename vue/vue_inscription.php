<h1><?= $strH1 ?></h1>
<p><?= $strPar ?></p>

<form action="" method="post">
  <label for="pseudo">Pseudo :</label>
  <input type="text" id="pseudo" name="pseudo" required><br><br>
  <label for="mail">Adresse e-mail :</label>
  <input type="email" id="mail" name="mail" required><br><br>
  <label for="mdp">Mot de passe :</label>
  <input type="password" id="mdp" name="mdp" required><br><br>
  <input type="submit" value="S'inscrire">
</form>