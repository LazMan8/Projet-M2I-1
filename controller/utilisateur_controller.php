<?php

class utilisateurController extends Controller
{
    public function connexion()
    {
        // Variables d'affichage
        $this->_arrData['strH1']	= "Se connecter";
        $this->_arrData['strPar']	= "Page permettant de se connecter";
        
        // Variables de fonctionnement
        $this->_arrData['strPage']	= "login";

        // initialise le tableau des erreurs
        $arrErrors = array();

        // Si le formulaire a été envoyé
        if ($_POST > 0) 
        {
            if ($_POST['mail'] == '')
            {
                $arrErrors['mail'] = "Le mail est obligatoire";
            }

            if ($_POST['password'] == '')
            {
                $arrErrors['password'] = "Le mot de passe est obligatoire";
            }

            if (count($arrErrors) === 0) 
            {
                require_once("model/utilisateur_model.php");
                $objModel = new UtilisateurModel();
                $arrUser = $objModel-findByMailAndPwd();

                if ($arrUser !== false) 
                {
                    $_SESSION['id']     = $arrUser['user_id'];
                    $_SESSION['peuso'] = $arrUser['pseudo'];
                    $_SESSION['message']= "Vous êtes bien connecté";
                    header("Location:index.php");
                } 
                
                else 
                {
                    $arrErrors[] = "Erreur de connexion";
                }
                
            }
            
        }
        $this->_arrData["arrErrors"] = $arrErrors;

        // Affiche
        $this->display("login");

            

    }

    public function deconnexion()
    {
        // On lance la session pour pouvoir la détruire
        session_start();
        session_destroy();

        // on lance la session pour le message puis redirection vers la page d'accueil
        session_start();
        $_SESSION['message']= "Vous êtes bien déconnecté";
        header("Location:index.php");
    }

    public function inscription()
    {
        // Variables d'affichage
        $this->_arrData['strH1']	= "Créer un compte";
        $this->_arrData['strPar']	= "Page permettant de créer son compte";

         // Variables de fonctionnement
         $this->_arrData['strPage'] 	= "inscription";

         $strConfirm_pwd	= $_POST['confirm_pwd']??"";

         // Variables pour la gestion des erreurs
        $arrErrors = [];
    
        // Création d'un objet utilisateur (à adapter selon votre logique)
        $objUser = new User();

        // Tentative de création du compte
        if ($objUser->createAccount()) 
        {
            // Message de succès
            echo "Votre compte a bien été créé, vous pouvez vous connecter";
        
            // Redirection vers la page de connexion
            header("Location:index.php?controller=user&action=login");
            exit();  // Assurez-vous d'ajouter un exit après un header Location pour arrêter l'exécution du script
        } 
        
        else 
        {
            // En cas d'erreur, ajouter un message d'erreur au tableau
            $arrErrors[] = "Erreur dans l'ajout";
        }

        // Variables utilisées pour la vue
        $this->_arrData['objUser'] = $objUser;
        $this->_arrData['arrErrors'] = $arrErrors;

        // Affichage de la vue
        $this->_display("create_account");


        
    }

    public function pwd_forgot()
    {
        // Variables d'affichage
        $this->_arrData['strH1']	= "Mot de passe ouvlier";
        $this->_arrData['strPar']	= "Page pour recuperer le mot de passe oublier";

         // Variables de fonctionnement
         $this->_arrData['strPage'] 	= "motDePasseOublier";
        
    }
}