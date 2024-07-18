<h1><?= $strH1 ?></h1>
<p><?= $strPar ?></p>

<form action="" method="post">
  <label for="pseudo">Pseudo :</label>
  <input type="text" id="pseudo" name="pseudo" required><br><br>
  <label for="email">Adresse e-mail :</label>
  <input type="email" id="email" name="email" required><br><br>
  <label for="mdp">Mot de passe :</label>
  <input type="password" id="mdp" name="mdp" required><br><br>
  <label for="mdpConfirme">Confirmation du mot de passe :</label>
  <input type="password" id="mdpConfirme" name="mdpConfirme" required><br><br>
  <input type="submit" value="Inscription">
</form>