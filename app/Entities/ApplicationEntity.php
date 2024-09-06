<?php
class ApplicationEntity{
    private string $idAppli;
    private string $nomAppli;
    private string $bdAppli;



    public function __construct(string $idAppli, string $nomAppli, string $bdAppli){
        $this->idAppli = $idAppli;
        $this->nomAppli = $nomAppli;
        $this->bdAppli = $bdAppli;

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
    public function getNomAppli(): string
    {
        return $this->nomAppli;
    }

    /**
     * Set the value of idRoleAppli
     */
    public function setNomAppli(string $nomAppli): self
    {
        $this->nomAppli = $nomAppli;

        return $this;
    }

    /**
     * Get the value of bdAppli
     */
    public function getbdAppli(): string
    {
        return $this->bdAppli;
    }

    /**
     * Set the value of bdAppli
     */
    public function setbdAppli(string $bdAppli): self
    {
        $this->bdAppli = $bdAppli;

        return $this;
    }
}