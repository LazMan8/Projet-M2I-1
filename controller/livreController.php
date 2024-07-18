<?php


class LivreController extends Controller
{
    public function addBook()
    {
        // Variables d'affichage
        $this->_arrData['strH1'] = "Ajouter un livre";
        $this->_arrData['strPar'] = "Page permettant d'ajouter un livre";
    
        // Variables de fonctionnement
        $this->_arrData['strPage'] = "addBook";

        require_once("entities/livreEntity.php");
        $objLivre = new Livre();
        $objLivre->hydrate($_POST);

        require_once("model/livreModel.php");
        $objLivreModel = new LivreModel();

        // initialise le tableau des erreurs
        $arrErrors	= array();

        if (count($_POST) > 0)
        {
            if ($objLivre->getTitre()) 
            {
                $arrErrors['titre'] = "Le titre est obligatoire";
            }
            
            if ($objLivre->getNomAuteur() == "") 
            {
                $arrErrors['nomAuteur'] = "L'auteur est obligatoire";
            }

            if($objLivre->getPrenomAuteur() == "")
            {
                $arrErrors['prenomAuteur'] = "Le prenom est obligatoire";
            }

            if($objLivre->getLivreContenu() == "")
            {
                $arrErrors['livreContenu'] = "Son contenu est obligatoire est obligatoire";
            }

            if($objLivre->getAnneeParution() == "")
            {
                $arrErrors['anneeParution'] = "L'annee est obligatoire";
            }

            if($objLivre->getImages() == "")
            {
                $arrErrors['images'] = "L'image est obligatoire";
            }

            if($objLivre->getIdGenre() == "")
            {
                $arrErrors['idGenre'] = "L'annee est obligatoire";
            }

            // Si le formulaire est OK
            if (count($arrErrors) == 0)
            {
                $boolOk = $objLivreModel->ajoutDeLivre();
                if ($boolOk) 
                {
                    $_SESSION['message'] = "Votre livre à bien été créé .";
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
        $this->_arrData['objLivre']  = $objLivre;
        $this->_arrData['arrErrors'] = $arrErrors;
        // Affichage
        $this->_display("addBook");
    }
        

}