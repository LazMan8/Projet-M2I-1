<?php


class UtilisateurCtrlr extends Connexion_a_la_base_de_donnee
{
    public function inscription()
    {
         // Variables d'affichage
         $this->_arrData['strH1']	= "Créer un compte";
         $this->_arrData['strPar']	= "Page permettant de créer son compte";

         // Variables de fonctionnement
         $this->_arrData['strPage'] 	= "inscription";
    }

    public function connexion()
    {
        // Variables d'affichage
        $this->_arrData['strH1']	= "Se connecter";
        $this->_arrData['strPar']	= "Page permettant de se connecter";

        // Variables de fonctionnement
        $this->_arrData['strPage']	= "connexion";
    }
}