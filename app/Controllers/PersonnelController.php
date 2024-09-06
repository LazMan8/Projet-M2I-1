<?php

require __DIR__ . "/../Models/PersonnelModel.php";

class PersonnelController extends MotherController
{

    private ?PersonnelEntity $_personnel;

    public function connexion()
    {
        //Variable titre et paragraphe
        $titreH1 = "Connexion";
        $paragraphe = "Formulaire de connexion";

        
        //Initialise un tableau d'erreur
        $arrErrors	= array();

        // verifie si les information sont envoyer en "Post"
        if (count($_POST) > 0) 
        {
            if ($_POST['mel'] == '')
            {
                $arrErrors['mel'] = "Le mail est obligatoire";
            }

            if ($_POST['password'] == '')
            {
                $arrErrors['password'] = "Le mot de passe est obligatoire";
            }

            if ($_POST['password'] == '')

            if (count($arrErrors) > 0) 
            {
                //Afichage du formaulaire
                require("../app/Views/login.php");
                //ToDo ameliorer 
                print_r($arrErrors);
            }


            $personnelModel = new PersonnelModel();
            
            $this->_personnel = $personnelModel->findPersonnelByEmail($_POST['mel']);
            
            if ($this->_personnel == null)
            {
                $arrErrors['mel'] = "Le mail n'existe pas";
                //Afichage du formaulaire
                require("../app/Views/login.php");
                //ToDo ameliorer 
                print_r($arrErrors);
            }

            
            else 
            {
                // if (password_verify($_POST['password'], $this->_personnel->getMdPerso()))
                if ($_POST['password'] == $this->_personnel->getMdPerso())
                {
                    // utilisateur connecter 
                
                    $this->afficherInfo();

                }
                else 
                {
                    $arrErrors['password'] = "Le mot de passe est incorrect";
                    //Afichage du formaulaire
                    require("../app/Views/login.php");
                    //ToDo ameliorer 
                    print_r($arrErrors);
                }


            }

        }

        else 
        {
            //Afichage du formaulaire
            require("../app/Views/login.php");
        }


    }


    public function afficherInfo()
    {
        // Test
        //echo $this->_personnel->getNomPerso();

        $titreH1 = "Vous êtes connecté";
        $paragraphe = "Voici vos informations personnelles";

        // valeur recu a la fin des traitement en post et en sql
        $matricul = $this->_personnel->getNumMatriculePerso();
        $nom = $this->_personnel->getNomPerso();
        $prenom = $this->_personnel->getPrenomPerso();

        $habilitations = $this->_personnel->getHabilitations();

        // affichage de la vue
        require(__DIR__ . "/../Views/affichageConfirmeConnexion.php");
        

          
    }

    public function deconnexion()
    {
        // On lance la session pour pouvoir la détruire
        session_start();
        session_destroy();

        // on lance la session pour le message puis redirection vers la page d'accueil
        session_start();
        $_SESSION['message'] = "Vous êtes bien déconnecté";
        header("Location:index.php?page=confirmeDeconnexion");
        
    }

    // ajout de personnel avec leur roles
    public function addPersonnel()
    {
        //Initialise un tableau d'erreur
        $arrErrors	= array();



    }

    // // donne les permission
    // public function givePermission()
    // {
        
    // }

    // gestions des roles
    public function gestionRoles()
    {

    }

}