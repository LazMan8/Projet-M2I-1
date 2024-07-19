<?php

class PageController extends Controller
{
    // page a propos
    public function about()
    {
        // Variables d'affichage
        $this->_arrData['strH1']	= "A propos de nous";
        $this->_arrData['strPar']	= "ceci est une page qui parle de notre pourquoi du comment";
        
        // Variables de fonctionnement
        $this->_arrData['strPage']	= "about";
    }

    // page de contact
    public function contact()
    {
        // Variables d'affichage
        $this->_arrData['strH1']	= "Contact";
        $this->_arrData['strPar']	= "Nous contacter";

        // Variables de fonctionnement
        $this->_arrData['strPage']	= "contact";

        $this->_display("contact");
        

    }

    // affichage de l'index
    public function index()
    {
        // Variables d'affichage
        $this->_arrData['strH1']	= "Quartier Lib";
        $this->_arrData['strPar']	= "Bienvenue sur notre site de bibliothèque numérique";

        // Variables de fonctionnement
        $this->_arrData['strPage']	= "index";

        $this->_display("index");
    }



}