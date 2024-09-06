<?php
class EstHabiliteEntity{
    private string $idAppli;
    private string $idRoleAppli;
    private string $numMatriculePerso;



    public function __construct(string $idAppli, string $idRoleAppli, string $numMatriculePerso){
        $this->idAppli = $idAppli;
        $this->idRoleAppli = $idRoleAppli;
        $this->numMatriculePerso = $numMatriculePerso;

    }
    

    /**
     * Get the value of idAppli
     */
    public function getIdAppli(): string
    {
        return $this->idAppli;
    }

    /**
     * Set the value of idAppli
     */
    public function setIdAppli(string $idAppli): self
    {
        $this->idAppli = $idAppli;

        return $this;
    }

    /**
     * Get the value of idRoleAppli
     */
    public function getIdRoleAppli(): string
    {
        return $this->idRoleAppli;
    }

    /**
     * Set the value of idRoleAppli
     */
    public function setIdRoleAppli(string $idRoleAppli): self
    {
        $this->idRoleAppli = $idRoleAppli;

        return $this;
    }

    /**
     * Get the value of numMatriculePerso
     */
    public function getnumMatriculePerso(): string
    {
        return $this->numMatriculePerso;
    }

    /**
     * Set the value of numMatriculePerso
     */
    public function setnumMatriculePerso(string $numMatriculePerso): self
    {
        $this->numMatriculePerso = $numMatriculePerso;

        return $this;
    }
}