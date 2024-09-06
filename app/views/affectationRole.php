<?php //echo"Gestion des rôles"; ?>



<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h1>Gestion des rôles</h1>
<?php

?>
<form method="POST">
<table>
  <tr>
    <th><button class="add-button" id="add-button">Ajouter</button></th>
    <th>
    <input type="search" id="search-input" placeholder="Rechercher...">
    <button class="search-button" id="search-button">Rechercher</button>  
    </th>
  </tr>
  <tr>
    <th>Identifiant du rôle applicatif</th>
    <th>Nom de l'application</th>
    <th>BDD de l'application</th>
    <th>Action</th>
</tr>
<?php foreach ($roles as $role): ?>
  <tr>
    <td><?= $role->getIdRoleAppli(); ?></td>
    <td><?= $role->getNomAppli();?></td>
    <td><?= $role->getBdApplication(); ?></td>
    <td><button disabled><a class="disabled" href="/index.php?page=gestionRole&action=modifier&idRoleAppli=<?= $role->getIdRoleAppli(); ?>&idAppli=<?= $role->getIdAppli(); ?>">Modifier</a></button>
    <button><a href="/index.php?page=gestionRole&action=supprimer&idRoleAppli=<?= $role->getIdRoleAppli(); ?>&idAppli=<?= $role->getIdAppli(); ?>">Supprimer</a></button></td>
  </tr>
  <?php endforeach ?>
  
</table>
</form>

</body>
</html>


