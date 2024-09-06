<?php
class RoleEntity extends Entity
{
    private string $idAppli;
    private string $idRoleAppli;
    private string $mdpRoleAppli;
    private string $nomAppli;
    private string $bdApplication;



    public function __construct(string $idAppli, string $idRoleAppli, string $mdpRoleAppli, $nomAppli, $bdApplication)
    {
        $this->idAppli = $idAppli;
        $this->idRoleAppli = $idRoleAppli;
        $this->mdpRoleAppli = $mdpRoleAppli;
        $this->nomAppli = $nomAppli;
        $this->bdApplication = $bdApplication;
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
     * Get the value of mdpRoleAppli
     */
    public function getMdpRoleAppli(): string
    {
        return $this->mdpRoleAppli;
    }

    /**
     * Set the value of mdpRoleAppli
     */
    public function setMdpRoleAppli(string $mdpRoleAppli): self
    {
        $this->mdpRoleAppli = $mdpRoleAppli;

        return $this;
    }
    /**
     * Get the value of nomAppli
     */
    public function getNomAppli(): string
    {
        return $this->nomAppli;
    }

    /**
     * Set the value of nomAppli
     */
    public function setNomAppli(string $nomAppli)
    {
        return $this->nomAppli = $nomAppli;
    }

    /**
     * Get the value of $bddApplication
     */
    public function getBdApplication()
    {
        return $this->bdApplication;
    }

    /**
     * Set the value of nomAppli
     */

    public function setBdApplication(string $bdApplication)
    {
        return $this->bdApplication = $bdApplication;
    }
}
