<?php

// Entité qui représente la structure d'authentification

class PersonnelEntity extends MotherEntity{
    private string $numMatriculePerso;
    private string $melPerso;
    private string $mdPerso;
    private string $nomPerso;
    private string $prenomPerso;
    private string $dateNaissancePerso;
    private string $adresseVille;
    private string $adresseRue;
    private int $adressePostale;
    private int $telPerso;
    private string $numService;

    private array $habilitations;


    // Constructeur

    public function __construct(string $numMatriculePerso, string $melPerso,string $mdPerso,string $nomPerso,string $prenomPerso,string $dateNaissancePerso, string $adresseVille,string $adresseRue, int $adressePostale, int $telPerso, string $numService){
        $this->numMatriculePerso = $numMatriculePerso;
        $this->melPerso = $melPerso;
        $this->mdPerso = $mdPerso;
        $this->nomPerso = $nomPerso;
        $this->prenomPerso = $prenomPerso;
        $this->dateNaissancePerso = $dateNaissancePerso;
        $this->adresseVille = $adresseVille;
        $this->adresseRue = $adresseRue;
        $this->adressePostale = $adressePostale;
        $this->telPerso = $telPerso;
        $this->numService = $numService;

        $this->habilitations = [];

    }

    // Getters

    public function getNumMatriculePerso(){
        return $this->numMatriculePerso;
    }

    public function getMelPerso(){
        return $this->melPerso;
    }
    
    public function getMdPerso(){
        return $this->mdPerso;
    }

    public function getNomPerso(){
        return $this-> nomPerso;
    }

    public function getPrenomPerso(){
        return $this->prenomPerso;
    }

    public function getDateNaissePerso(){
        return $this->dateNaissancePerso;
    }
    
    public function getAdresseVille(){
        return $this->adresseVille;
    }

    public function getAdresseRue(){
        return $this->adresseRue;
    }

    public function getAdressePostale(){
        return $this->adressePostale;
    }

    public function getTelPerso(){
        return $this->telPerso;
    }

    public function getNumService(){
        return $this->numService;
    }
     // Setters

     public function setNumMatriculePerso($strNumMatriculePerso){
        $this->numMatriculePerso = $strNumMatriculePerso;
     }

     public function setMelPerso($strMelPerso){
        $this->melPerso = $strMelPerso;
     }

     public function setMdPerso($strMdPerso){
        $this->mdPerso = $strMdPerso;
     }

     public function setNomPerso($strNomPerso){
        $this->nomPerso = $strNomPerso;
     }

     public function setPrenomPerso($strPrenomPerso){
        $this->prenomPerso = $strPrenomPerso;
     }

     public function setDateNaissancePerso($strDateNaissancePerso){
        $this->dateNaissancePerso=$strDateNaissancePerso;
     }

     public function setAdresseVille($strAdresseVille){
        $this->adresseVille = $strAdresseVille;
     }

     public function setAdresseRue($strAdresseRue){
        $this->adresseRue = $strAdresseRue;
     }

     public function setAdressePostale($strAdressePostale){
        $this->adressePostale = $strAdressePostale;
     }

     public function setTelPerso($strTelPerso){
        $this->telPerso=$strTelPerso;
     }

     public function setNumService($strNumService){
        $this->numService = $strNumService;
     }
        
     public function addHabilitation(
        $objApplication,
        $objHabilite,
        $objRole) {
        $this->habilitations[] = [
            'application' => $objApplication,
            'estHabilite' => $objHabilite,
            'role' => $objRole,
        ];
     }

     public function removeHabilitation(EstHabiliteEntity $rmhabilitation) {
        $i = count($this->habilitations);
        $remove = -1;
        while($i > 0) {
            $i--;
            if($this->habilitations[$i]['estHabilite']['idRoleAppli'] == $rmhabilitation['idRoleAppli']
            && $this->habilitations[$i]['estHabilite']['idAppli'] == $rmhabilitation['idAppli'])
                $remove = $i;
                break;
        }

        if($remove > 0) {
            array_splice($this->habilitations, $i, 1);
        }

     }

     public function resetHabilitations() {
        $this->habilitations = [];
     }


     public function getHabilitations() {
        return $this->habilitations;
     }





    
}