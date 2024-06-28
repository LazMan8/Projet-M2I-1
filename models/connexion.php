<?php
/**
 * Classe mère qui permet de faire la connexion à la base de données
 */

 class ModelMother{
    protected PDO $_db;

    /**
     * Constructeur de la classe
     */
    public function __construct(){
        try{
            //Connexion à la base de données
            $this->_db = new PDO(
                "mysql:host=localhost;dbname=quartierlib",
                "root",
                "",
                array(PDO:ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC) // mode de renvoi
            );
            // Résolution des problèmes d'encodage
            $this->_db->exec("SET CHARACTER SET uft8");

            // configuration des exceptions
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION).

        }catch(PDOException$e){
            echo"Echec de connexion : ".$e->getMessage();
        }

    }


 }

