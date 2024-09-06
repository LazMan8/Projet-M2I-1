<?php

// require "../Models/RoleModel.php";

class RoleController extends MotherController
{
    // ajout d'une variable de type RoleEntity
    private ?RoleEntity $_roles;


    // gestion des roles
    public function gestionRoles()
    {
        //Initialise un tableau d'erreur
        $arrErrors	= array();

        
    }

    //affectation d'un role au personnel
    public function affectationRoles()
    {
        //Initialise un tableau d'erreur
        $arrErrors	= array();

        //require 
        require __DIR__ . "/../Models/RoleModel.php";
        $roleModel = new RoleModel();


        if (isset($_GET['action']) && $_GET['action'] == 'supprimer')
        {
            # code...
            $idRoleAppli = $_GET['idRoleAppli'] ?? '';
            $idAppli = $_GET['idAppli'] ?? -1;

            $roleModel->deleteRole($idRoleAppli, $idAppli);
            
            header('Location: index.php?page=gestionRole');
        }

        // if (isset($_GET['action']) && $_GET['action'] == 'modifize')
        // {
        //     # code...
        //     $idRoleAppli = $_GET['idRoleAppli'] ?? '';
        //     $idAppli = $_GET['idAppli'] ?? -1;

        //     //$roleModel->deleteRole($idRoleAppli, $idAppli);
            
        //     header('Location: index.php?page=gestionRole');
        // }


        $roles = $roleModel->ListRole();

        

        // verifie si les 
        // if () 
        // {

        // }

        // requier pour tester
        require __DIR__ . "/../Views/affectationRole.php";
    }

    public function ajoutRole()
    {
        //Initialise un tableau d'erreur
        $arrErrors	= array();

        // verifie si les valeur de poste sont superieur aà0
        if (count($_POST) > 0) 
        {
            if ($_POST['idAppli'] == '')
            {
                $arrErrors['idAppli'] = "Le champs idAppli est obligatoire";
            }

            if ($_POST['idRoleAppli'] == '')
            {
                $arrErrors['idRoleAppli'] = "Le champs idRoleAppli est obligatoire";
            }

            if ($_POST['mdpAppli'] == '')
            {
                $arrErrors['mdpAppli'] = "Le champs mdpAppli est obligatoire";
            }

            if (count($arrErrors) > 0) 
            {
                // appel du formulaire
                require __DIR__ . "/../views/addRole.php";

                // Affichage de l'erreur
                print_r($arrErrors);
            }

            // on appelle la connexion a la base de données grâce à l'instance de RoleModel
            require __DIR__ . "/../Models/RoleModel.php";
            $roleModel = new RoleModel();

            // on appelle le RoleEntity
            $roleEntity = new RoleEntity($_POST['idAppli'], $_POST['idRoleAppli'], $_POST['mdpRoleAppli'], $_POST['nomAppli'], $_POST['bdAppli']);
        

            $this->_roles = $roleModel->addRole($roleEntity);

            if ($this->_roles == NULL)
            {
                $arrErrors['error'] = "Erreur lors de l'ajout du role";
            }
            
            else
            {
                $arrErrors['success'] = "Le role a été ajouté avec succès";
                
            }





        }
    }
}