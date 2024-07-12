<?php

// Entité qui représente la structure d'un livre

class Livre{

    private string $_titre;
    private string $_nomAuteur;
    private string $_prenomAuteur;
    private string $_livreContenu;
    private int $_anneeParution;
    private string $_image;



    /* Constructeur

    public function __construct(string $_titre,string $_nomAuteur,string $_prenomAuteur,string $_livreContenu,int $_anneeParution,string $_image){
        $this->_titre = $_titre;
        $this->_nomAuteur = $_nomAuteur;
        $this->_prenomAuteur = $_prenomAuteur;
        $this->_livreContenu = $_livreContenu;
        $this->_anneeParution = $_anneeParution;
        $this->_image = $_image;

    }*/
    // Methode toString
    public function __toString(){
        return $this->_titre." / ".$this->_nomAuteur." / ".$this->_prenomAuteur." / ".$this->_anneeParution;
    }
    // Getters

    public function getTitre(){
        return $this->_titre;

    }
    public function getNomAuteur(){
        return $this->_nomAuteur;
    }
    public function getPrenomAuteur(){
        return $this->_prenomAuteur;
    }
    public function getLivreContenu(){
        return $this->_livreContenu;
    }
    public function getAnneeParution(){
        return $this->_anneeParution;
    }
    public function getImage(){
        return $this-> _image;
    }

    // Setters

    public function setTitre($_titre){
        $this->_titre=$_titre;
    }
    public function setNomAuteur($_nomAuteur){
        $this->_nomAuteur = $_nomAuteur;
    }
    public function setPrenomAuteur($_prenomAuteur){
        $this->_prenomAuteur=$_prenomAuteur;
    }
    public function setLivreContenu($_livreContenu){
        $this->_livreContenu=$_livreContenu;  
    }
    public function setAnneeParution($_anneeParution){
        $this->_anneeParution=$_anneeParution;
    }
    public function setImage($_image){
        $this->_image=$_image;
    }

    // Afficher les livres 

   


}
//test d'affichage
echo "test d'affichage <br>";
$titre1 = new Livre("le horla","Baudelaire","Charles","---- ",1870,"zzz");
$titre2= new Livre("zzz","yyy","xxx","---",2010,"aaa");
echo "$titre1 <br>";
echo $titre2;



