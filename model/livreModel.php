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

    public function ajoutDeLivre()
    {
        $strQuery = "INSERT INTO Livre (titre, nomAuteur, prenomAuteur, livreContenu, anneeParution, images, idGenre) 
                        VALUES (:titre, :nomAuteur, :prenomAuteur, :livreContenu, :anneeParution, :images, :idGenre)";
        
        $strRqPrep = $this->_db->prepare($strQuery);

        $strRqPrep->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $strRqPrep->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
        $strRqPrep->bindValue(':nomAuteur', $_POST['nomAuteur'], PDO::PARAM_STR);
        $strRqPrep->bindValue(':prenomAuteur', $_POST['prenomAuteur'], PDO::PARAM_STR);
        $strRqPrep->bindValue(':livreContenu', $_POST['LivreContenu'], PDO::PARAM_STR);
        $strRqPrep->bindValue(':anneeParution', $_POST['anneParution'], PDO::PARAM_STR);
        $strRqPrep->bindValue(':images', $_POST['image'], PDO::PARAM_STR);
        $strRqPrep->bindValue(':idGenre', $_POST['idGenre'], PDO::PARAM_STR);

        $resultat = $strRqPrep->fetch(PDO::FETCH_ASSOC);

        return $resultat;

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