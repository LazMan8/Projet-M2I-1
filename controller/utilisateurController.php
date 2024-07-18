<?php

class utilisateurController extends Controller
{


    public function connexion()
    {
    // Variables d'affichage
    $this->_arrData['strH1'] = "Se connecter";
    $this->_arrData['strPar'] = "Page permettant de se connecter";
    
    // Variables de fonctionnement
    $this->_arrData['strPage'] = "connexion";

    // Initialise le tableau des erreurs
    $arrErrors = array();

    // Affiche le formulaire de connexion
    $this->_display("connexion");

    var_dump($_POST);
    var_dump($arrErrors);
    // Si le formulaire a été envoyé
    if (count($_POST) > 0) 
    {
        if ($_POST['email'] == '')
        {
            $arrErrors['email'] = "L'email est obligatoire";
        }

        if ($_POST['password'] == '')
        {
            $arrErrors['password'] = "Le mot de passe est obligatoire";
        }

        if (count($arrErrors) === 0) 
        {
            require_once("model/utilisateur_model.php");
            $objModel = new UtilisateurModel();
            $arrUser = $objModel->findByMailAndPwd();
            var_dump($arrUser);
            
            if ($arrUser !== false) 
            {
                $_SESSION['id']     = $arrUser['user_id'];
                $_SESSION['email'] = $arrUser['email'];
                $_SESSION['message']= "Vous êtes bien connecté";
                header("Location:index.php");
            } 
            else 
            {
                $arrErrors[] = "Erreur de connexion";
            }
        }
        
        $this->_arrData["arrErrors"] = $arrErrors;
        }
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

        //var_dump($_POST);
        $strMdpConfirme	= $_POST['mdpConfirme']??"";

        require_once("entities/utilisateurEntity.php");
        $objUser = new UtilisateurEntity();
        $objUser->hydrate($_POST);

        var_dump($objUser);

        require_once("model/utilisateurModel.php");
        $objModel   = new UtilisateurModel();

        var_dump($objModel);

        // initialise le tableau des erreurs
        $arrErrors	= array();
        var_dump($objUser->getPseudo());
        var_dump($objUser->geteMail());
        // Si le formulaire a été envoyé
        if (count($_POST) > 0)
        {
            
            // Si l'utilisateur n'a pas saisi son nom
            if ($objUser->getPseudo() == "")
            {
                $arrErrors['pseudo'] = "Le psuedo est obligatoire";
            }
                
            // Si l'utilisateur n'a pas saisi son mail
            if ($objUser->getEMail()  == "")
            {
                $arrErrors['mail'] = "Le mail est obligatoire";
            }
            
            elseif(!filter_var($objUser->getEMail(), FILTER_VALIDATE_EMAIL))
            {
                $arrErrors['mail'] = "Le mail n'est pas valide";
            }
            
            else
            {
                // Récupère les utilisateurs qui ont l'adresse Mail
                $arrUser = $objModel->rechercheMail($objUser->getEmail());
                
                // Si j'ai un résultat => erreur
                if($arrUser !== false)
                {
                        $arrErrors['mail'] = "Le mail est déjà utilisé";
                }
            }

            // Si l'utilisateur n'a pas saisi son mot de passe
            if ($objUser->getMdp() == "")
            {
                $arrErrors['mdp'] = "Le mot de passe est obligatoire";
            }
            
            elseif ($objUser->getMdp() != $strMdpConfirme)
            {
                $arrErrors['confirm_pwd'] = "Le mot de passe et sa confirmation ne correspondent pas";
            }
            var_dump($arrErrors);
            // Si le formulaire est OK
            if (count($arrErrors) == 0) 
            {
                $boolOk = $objModel->create($objUser);
                var_dump($objModel);
                die();

                if ($boolOk) 
                {
                    $_SESSION['message'] = "Vous compte à bien été créé, vous pouvez vous connecter";
                    // Redirection vers la page d'accueil
                    header("Location:index.php?controller=user&action=login");
                }
                
                else
                {
                    $arrErrors[] = "Erreur dans l'ajout";
                }
                
            }
            
        }
            // Variables utilisées pour la vue
            $this->_arrData['objUser']  = $objUser;
            $this->_arrData['arrErrors'] = $arrErrors;
            // Affichage
            $this->_display("inscription");
        }

    //public function mdpOubliee()
    
}