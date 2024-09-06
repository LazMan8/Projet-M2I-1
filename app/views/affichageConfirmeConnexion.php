
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center"><?= $titreH1;?></h1>
                <p class="text-center"><?= $paragraphe;?></p>
 
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informations personnelles</h5>
                        <p class="card-text">Matricule : <?=$matricul;?></p>
                        <p class="card-text">Nom : <?= $nom;?></p>
                        <p class="card-text">Prénom : <?= $prenom?></p>
                    </div>
                </div>
 
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Habilitations</h5>
                        <ul class="list-group">
                            <?php foreach($habilitations as $habilitation) {?>
                                <li class="list-group-item">
                                    <?= $habilitation['application']->getNomAppli(). " ". $habilitation['application']->getbdAppli(). " ". $habilitation['role']->getIdRoleAppli(). " ". $habilitation['role']->getMdpRoleAppli()?>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
 
                <div class="text-center mt-3">
                    <a href="index.php?page=deconnexion" class="btn btn-danger btn-lg">Déconnexion</a>
                </div>
            </div>
        </div>
    </div>
</body>
