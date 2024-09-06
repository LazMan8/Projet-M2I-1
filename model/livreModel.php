<?php
/*

stocke le CRUD

*/ 

require("connexion.php");

class LivreModel extends Connexion
{
    public function __construct()
    {
        parent::__construct();
    }

    // LivreModel.php
    public function ajoutDeLivre()
    {  
        $strQuery = "INSERT INTO livre (titre, nomAuteur, prenomAuteur, livreContenu, anneeParution, images, idGenre) 
                    VALUES (:titre, :nomAuteur, :prenomAuteur, :livreContenu, :anneeParution, :images, :idGenre);";
        
        $strRqPrep = $this->_db->prepare($strQuery);

        try 
        {
            $strRqPrep->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
            $strRqPrep->bindValue(':nomAuteur', $_POST['nomAuteur'], PDO::PARAM_STR);
            $strRqPrep->bindValue(':prenomAuteur', $_POST['prenomAuteur'], PDO::PARAM_STR);
            $strRqPrep->bindValue(':livreContenu', $_POST['livreContenu'], PDO::PARAM_STR);
            $strRqPrep->bindValue(':anneeParution', $_POST['anneeParution'], PDO::PARAM_INT);
            $strRqPrep->bindValue(':images', file_get_contents($_FILES['images']['tmp_name']), PDO::PARAM_LOB);
            $strRqPrep->bindValue(':idGenre', $_POST['idGenre'], PDO::PARAM_INT);

            $strRqPrep->execute();

            return true;
        } 
        catch (PDOException $e) 
        {
            return false;
        }
    }


    public function  rechercheLivreTitre(string $titre)
    {
        $strQuery = "SELECT * FROM livre WHERE titre = :titre";
        $strRqPrep = $this->_db->prepare($strQuery);
        $strRqPrep->bindValue(':livre', $_POST['titre'], PDO::PARAM_STR);
        $strRqPrep->execute();
        $resultat = $strRqPrep->fetch(PDO::FETCH_ASSOC);

        return $resultat;
        
    }
}