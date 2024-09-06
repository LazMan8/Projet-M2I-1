<?php

require __DIR__ . "/../Entities/PersonnelEntity.php";
require __DIR__ . "/../Entities/ApplicationEntity.php";
require __DIR__ . "/../Entities/EstHabiliteEntity.php";
require __DIR__ . "/../Entities/RoleEntity.php";

class PersonnelModel extends ConnexionBD{

    public function __construct(){
        parent::__construct();
    }

    /** 
     *  Méthode qui permet de récupérer tout le personnel
     * @return array la liste du personnel
     * */
    public function ListPersonnel():array{
        $strQuery = "SELECT personnel.numMatriculePerso,melPerso,mdpPerso,mdpPerso,nomPerso,prenomPerso,dateNaissancePerso,adresseVille,adresseRue,adressePostale,telPerso,numService,
        roleapplicatif.idRoleAppli,nomAppli,bdAppli,`application`.idAppli
        FROM personnel;";
            //INNER JOIN esthabilite ON personnel.numMatriculePerso=esthabilite.numMatriculePerso
                    //INNER JOIN roleapplicatif ON esthabilite.idRoleAppli=roleapplicatif.idRoleAppli
                        //INNER JOIN `application` ON `application`.idAppli=roleapplicatif.idAppli";
                           

  
        // Recherche par mot clé
            // Recherche par numéro de matricule

        //$strNumMatriculePerso = $_POST['numMatriculePerso']??"";
        //if($strNumMatriculePerso !=""){
        //   $strQuery .="numMatricule= '".$strNumMatricule."' ";
        //}

            // Recherche par nom

        //$strnomPerso = $_POST['nomPerso']??"";
        //if ($strnomPerso !=""){
           // $strQuery .="nomPerso = '".$strnomPerso."' ";

        //}

    // Exécution de la requête et affichage des résultats
        return $this-> _dataBase->query($strQuery)->fetchAll();
        
    }

    public function addPerso(PersonnelEntity $objPersonnel){
        $strQuery="INSERT INTO personnel(numMatriculePerso, melPerso,mdPerso,nomPerso,prenomPerso,dateNaissancePerso,adresseVille,adresseRue,adressePostale,telPerso,numService) VALUES(:numMatriculePerso, :melPerso, :mdPerso, :prenomPerso, :dateNaissancePerso, :adresseVille,adresseRue, :adressePostale, :telPerso, :numService);";

        $strRqPrep = $this->_dataBase->prepare($strQuery);
        $strRqPrep->bindValue(":numMatriculePerso", $objPersonnel->getNumMatriculePerso(),PDO::PARAM_STR);
        $strRqPrep->bindValue(":melPerso", $objPersonnel->getMelPerso(), PDO::PARAM_STR);
        $strRqPrep->bindValue(":mdPerso",
        $objPersonnel->getMdPerso(), PDO::PARAM_STR);
        $strRqPrep->bindValue(":nomPerso",
        $objPersonnel->getNomPerso(), PDO::PARAM_STR);
        $strRqPrep->bindValue(":prenomPerso",
        $objPersonnel->getPrenomPerso(), PDO::PARAM_STR);
        $strRqPrep->bindValue(":dateNaissancePerso",
        $objPersonnel->getDateNaissePerso(), PDO::PARAM_STR);
        $strRqPrep->bindValue(":adresseVille",
        $objPersonnel->getAdresseVille(), PDO::PARAM_STR);
        $strRqPrep->bindValue(":adresseRue",
        $objPersonnel->getAdresseRue(), PDO::PARAM_STR);
        $strRqPrep->bindValue(":adressePostale",
        $objPersonnel->getAdressePostale(), PDO::PARAM_STR);
        $strRqPrep->bindValue(":telPerso",
        $objPersonnel->getTelPerso(), PDO::PARAM_STR);
        $strRqPrep->bindValue(":numService",
        $objPersonnel->getNumService(), PDO::PARAM_STR);
    


    }
    
    public function findPersonnelByEmail($strMelPerso): ?PersonnelEntity {
        $strQuery = "SELECT personnel.numMatriculePerso,melPerso,mdpPerso,nomPerso,prenomPerso,dateNaissancePerso,adresseVille,adresseRue,adressePostale,telPerso,numService,
        roleapplicatif.idRoleAppli,nomAppli,bdAppli,mdpRoleAppli,`application`.idAppli
        FROM personnel
            LEFT JOIN esthabilite ON personnel.numMatriculePerso=esthabilite.numMatriculePerso
                    LEFT JOIN roleapplicatif ON esthabilite.idRoleAppli=roleapplicatif.idRoleAppli
                        LEFT JOIN `application` ON `application`.idAppli=roleapplicatif.idAppli";

        
        $strQuery .=" WHERE melPerso = '".$strMelPerso."' ";

        $stmt = $this-> _dataBase->query($strQuery);
        $habilitations = $stmt->fetchAll();

        if($habilitations === false || count($habilitations) == 0)
            return null;


        $objPersonnel  = new PersonnelEntity(
            $habilitations[0]['numMatriculePerso'],
            $habilitations[0]['melPerso'],
            $habilitations[0]['mdpPerso'],
            $habilitations[0]['nomPerso'],
            $habilitations[0]['prenomPerso'],
            $habilitations[0]['dateNaissancePerso'],
            $habilitations[0]['adresseVille'],
            $habilitations[0]['adresseRue'],
            $habilitations[0]['adressePostale'],
            $habilitations[0]['telPerso'],
            $habilitations[0]['numService'],
        );

       

        foreach($habilitations as $habilitation) {

            if(is_null($habilitation['idAppli'])) continue;

            $objApplication = new ApplicationEntity(
                $habilitation['idAppli'],
                $habilitation['nomAppli'],
                $habilitation['bdAppli'],
            );

            $objHabilite = new EstHabiliteEntity(
                $habilitation['idAppli'],
                $habilitation['idRoleAppli'],
                $habilitation['numMatriculePerso'],
            );

            $objRole = new RoleEntity(
                $habilitation['idAppli'],
                $habilitation['idRoleAppli'],
                $habilitation['mdpRoleAppli'],
                $habilitation['nomAppli'],
                $habilitation['bdAppli']
            );

            $objPersonnel->addHabilitation(
                $objApplication,
                $objHabilite,
                $objRole,
            );

        }



        return $objPersonnel;

    }
   

}