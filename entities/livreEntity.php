<?php


require ("motherEntity.php");
// Entité qui représente la structure d'un livre

class Livre extends Entity
{ 

    private string $titre = "";
    private string $nomAuteur = "";
    private string $prenomAuteur = "";
    private string $livreContenu = "";
    private int $anneeParution;
    private string $images = "";
    private int $genre;


    
    // Getters
    public function getTitre()
    {
        return $this->titre;

    }
    public function getNomAuteur()
    {
        return $this->nomAuteur;
    }
    public function getPrenomAuteur()
    {
        return $this->prenomAuteur;
    }
    public function getLivreContenu()
    {
        return $this->livreContenu;
    }
    public function getAnneeParution()
    {
        return $this->anneeParution;
    }
    
    public function getImages()
    {
        return $this-> images;
    }
    public function getIdGenre(): int
    {
        return $this->genre;
    }

    // Setters

    public function setTitre($strtitre)
    {
        $this->titre=$strtitre;
    }
    public function setNomAuteur($strnomAuteur)
    {
        $this->nomAuteur = $strnomAuteur;
    }
    public function setPrenomAuteur($strprenomAuteur)
    {
        $this->prenomAuteur=$strprenomAuteur;
    }
    public function setLivreContenu($strlivreContenu)
    {
        $this->livreContenu=$strlivreContenu;  
    }
    public function setAnneeParution($stranneeParution)
    {
        $this->anneeParution=$stranneeParution;
    }
    public function setImages($strimages)
    {
        $this->images=$strimages;
    }
    public function setIdGenre(int $idGenre): self
    {
        $this->genre = $idGenre;
        return $this;
    }

  


}