<?php

/**
 * Classe qui gère les échanges avec la base de données
 * pour les livres
 */

 require("connexion.php");

 class LivreModel extends ModelMother{

    public function __construct(){
        parent::__construct();
    }
/**
 * Méthode permettant de récupérer 3 livres sur la page d'accueil
 * @param int $intLimit nombre limite de résultats
 * @return arrray la liste des livres
 * 
 */
    public function findAll(int $intLimit=0, int $intOffset=0){
        $boolWhere = false;
        $strQuery  = "SELECT livre.idLivre,titre,nomAuteur,prenomAuteur,livreContenu, anneeParution, images,genre
        FROM livre
            INNER JOIN genre ON livre.idGenre = genre.idGenre";

    

    // Recherche par mot clé
        // Recherche par le titre

        $strTitre = $_POST['titre']??"";
        if ($strTitre !=''){
            $strQuery.= " WHERE titre LIKE '%".$strTitre."%'";
            $boolWhere=true;

        }
    // recherche par nom d'auteur

        $strNomAuteur = $_POST['nomAuteur']??"";
        if ($strNomAuteur !=""){
            $strQuery .=($boolWhere)? " AND ":" WHERE ";
            $strQuery.= "nomAuteur LIKE '%".$strNomAuteur ."%'";
            $boolWhere=true;

        }
        // Recherche par année
        $strDate = $_POST['anneeParution']??"";
        if($strDate !=''){
            $strQuery .=($boolWhere)?" AND ":" WHERE ";
            $strQuery .= "anneeParution = '".$strDate."' ";
            $boolWhere .= true;
        }
         // Recherche par genre

         $strGenre = $_POST['genre']??"";
         var_dump($_POST);
         if($strGenre !=""){
             $strQuery .=($boolWhere)?" AND ":" WHERE ";
             $strQuery .="genre LIKE '%".$strGenre ."%'"; 
             $boolWhere .= true;
         }

        $strQuery.= " ORDER BY titre DESC ";
        if($intLimit>0) {
            $strQuery .=" LIMIT ".$intLimit." OFFSET ".$intOffset;

        }

       

    // Execution de la requête et affichage des résultats
        var_dump($strQuery);
        return $this->_db->query($strQuery)->fetchall();
    }
    


    
     



}

