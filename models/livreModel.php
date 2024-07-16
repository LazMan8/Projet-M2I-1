<?php

/**
 * Classe qui gère les échanges avec la base de données
 * pour les livres
 */

 require("models/connexion.php");

 public class LivreModel extends ModelMother{

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
        $strQuery  = "SELECT idLivre,titre,nomAuteur,prenomAuteur,livreContenu, anneeParution, images
        FROM livre
            INNER JOIN listegenres ON idGenre = idLivre";

    }

    // Recherche par mot clé
        // Recherche par le titre

    $strKeyword = $_POST['keywords']??"";
    if($strKeyword !=''){
        $strQuery.= "WHERE titre LIKE '%".$strKeyword."%'";
        $boolWhere=true;

    }
    // recherche par nom d'auteur

    $intnomAuteur = $_POST['nomAuteur']??0;
    if ($intnomAuteur>0){
        $strQuery .=($boolWhere)?0 " AND ":" WHERE ";
        $strQuery.= "nomAuteur = ".$intnomAuteur; 

    }

    $strQuery.= "ORDER BY titre DESC ";
    if($intLimit>0) {
        $strQuery .=" LIMIT ".$intLimit." OFFSET ".$intOffset;

    }

    // Execution de la requête et affichage des résultats
    return $this->_db->query($strQuery)->fetchall();

    // Recherche par année

    $strDate = $_POST['anneeParution']??"";
    if($strDate !=''){
        $strQuery .=($boolWhere)?" AND ":" WHERE ";
        $strQuery .= "anneeParution = '".$strDate."' ";
        $boolWhere .= true;

    }
     $strQuery.="ORDER BY nomAuteur AND titre ";
     if($intLimit>0){
        $strQuery .=" LIMIT ".$intLimit." OFFSET ".$instOffset;
     }

     return $this->_db->query($strQuery)->fetchall();

    


 }
