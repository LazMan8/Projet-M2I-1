<?php


require_once('entities/motherEntity.php');
// Entité qui représente la structure d'un livre

class Livre extends Entity{ 

    private string $titre;
    private string $nomAuteur;
    private string $prenomAuteur;
    private string $livreContenu;
    private int $anneeParution;
    private string $images;



    // Constructeur

    public function __construct(string $titre,string $nomAuteur,string $prenomAuteur,string $livreContenu,int $anneeParution,string $images){
        $this->titre = $titre;
        $this->nomAuteur = $nomAuteur;
        $this->prenomAuteur = $prenomAuteur;
        $this->livreContenu = $livreContenu;
        $this->anneeParution = $anneeParution;
        $this->images = $images;

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

    // Afficher les livres 

    /*public function afficherLivre(){
        result="";
        foreach($this->_titre as $titre){
            $result.=$titre->getTitre()."<br>";
        }
        return $result;
    }*/


}



//test d'affichage

$titre1 = new Livre("le horla","Baudelaire","Charles","---- ",1870,"zzz");
$titre2= new Livre("zzz","yyy","xxx","---",2010,"aaa");
echo $titre1;
echo $titre2;

