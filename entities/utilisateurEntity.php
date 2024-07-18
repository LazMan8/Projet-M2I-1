<?php

require('motherEntity.php');

/**
 *  
 */
class UtilisateurEntity extends Entity
{
	
	private string $_pseudo = '';
    private string $_email = '';
    private string $_mdp = '';
    private string $_role = 'Utilisateur simple';
    private string $_status = 'Aucun avertissement';
        

    /**
     * Getter du pseudo
     * @return string
     */
    public function getPseudo()
    {
        return $this->_pseudo;
    }

    /**
     * Setter du pseudo
     * @param $strPseudo
     * @return void
     */
    public function setPseudo($strPseudo)
    {
        $this->_pseudo = trim($strPseudo);
    }

    /**
     * Getter du mail
     * @return string
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * Setter du mail
     * @param $strMail
     * @return void
     */
    public function setEmail($strMail)
    {
        $this->_email = strtolower(trim($strMail));
    }

    /**
     * Getter du mot de passe
     * @return string
     */
    public function getMdp()
    {
        return $this->_mdp;
    }

    /**
     * Setter du mot de passe
     * @param $strPwd
     * @return void
     */
    public function setMdp($strPwd)
    {
        $this->_mdp = $strPwd;
    }
       

    public function getMdpHash()
    {
        return password_hash($this->_mdp, PASSWORD_DEFAULT);
    }

    /**
     * Getter du role
     * @return string
     */
    public function getRole()
    {
        return $this->_role;
    }

    /**
     * Setter du role
     * @param $strRole
     * @return void
     */
    public function setRole($strRole)
    {
        $this->_role = trim($strRole);
    }

    /**
     * Getter du status
     * @return string
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * Setter du status
     * @param $strStatus
     * @return void
     */
    public function setStatus($strStatus)
    {
        $this->_status = trim($strStatus);
    }
}