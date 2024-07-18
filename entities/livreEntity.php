<?php


require ("motherEntity.php");
// Entité qui représente la structure d'un livre

class Livre extends Entity{ 

    private string $titre;
    private string $nomAuteur;
    private string $prenomAuteur;
    private string $livreContenu;
    private int $anneeParution;
    private string $images;
    private string $genre;
    



    // Constructeur

    public function __construct(string $titre,string $nomAuteur,string $prenomAuteur,string $livreContenu,int $anneeParution,string $images, $genre){
        $this->titre = $titre;
        $this->nomAuteur = $nomAuteur;
        $this->prenomAuteur = $prenomAuteur;
        $this->livreContenu = $livreContenu;
        $this->anneeParution = $anneeParution;
        $this->images = $images;
        $this->genre = $genre;

    }
    // Methode toString
    public function __toString(){
        return $this->titre." / ".$this->nomAuteur." / ".$this->prenomAuteur." / ".$this->anneeParution;
    }
    // Getters

    public function getTitre(){
        return $this->titre;

    }
    public function getNomAuteur(){
        return $this->nomAuteur;
    }
    public function getPrenomAuteur(){
        return $this->prenomAuteur;
    }
    public function getLivreContenu(){
        return $this->livreContenu;
    }
    public function getAnneeParution(){
        return $this->anneeParution;
    }
    
    public function getImages(){
        return $this-> images;
    }
    public function getGenre(){
        return $this->genre;
    }

    // Setters

    public function setTitre($strtitre){
        $this->titre=$strtitre;
    }
    public function setNomAuteur($strnomAuteur){
        $this->nomAuteur = $strnomAuteur;
    }
    public function setPrenomAuteur($strprenomAuteur){
        $this->prenomAuteur=$strprenomAuteur;
    }
    public function setLivreContenu($strlivreContenu){
        $this->livreContenu=$strlivreContenu;  
    }
    public function setAnneeParution($stranneeParution){
        $this->anneeParution=$stranneeParution;
    }
    public function setImages($strimages){
        $this->images=$strimages;
    }
    public function setGenre($strGenre){
        $this->genre=$strGenre;
    }

  


}



