<?php
/**
     * Controller des pages de contenu
     */

class PageControlr extends Controller
{
    public function contact()
    {
        // Variables d'affichage
        $this->_arrData['strH1']	= "Contact";
        $this->_arrData['strPar']	= "Page de contact";

        // Variables de fonctionnement
        $this->_arrData['strPage'] 	= "contact";

        $this->_display("contact");
    }
}

