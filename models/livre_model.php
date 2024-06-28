<?php

/**
 * Classe qui gère les échanges avec la base de données
 * pour les livres
 */

 require(models/connexion.php);

 public class LivreModel extends ModelMother{

    public function __construct(){
        parent::__construct();
    }
/**
 * Méthode permettant de récupérer 3 livres sur la page d'accueil
 * @param int $intLimit nombre limite de résultats
 * @return arrray laliste des articles
 * 
 */
    public function findAll(int $intLimit=0, int $intOffset=0){
        $boolWhere = false;
        $strQuery  = "SELECT idLivre,titre,nomAuteur,prenomAuteur,livreContenu, anneeParution, image
        FROM livre
            INNER JOIN utilisateur ON livre_creator = idUtilisateur";

    }



    


 }
