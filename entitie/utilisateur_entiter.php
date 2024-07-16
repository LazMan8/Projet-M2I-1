<?php

require('entitie/mere_entiter');

/**
 *  
 */
class Utilisateur 
{
	
	private string $_pseudo = '';
    private string $_mail = '';
    private string $_pwd = '';
        

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
    public function getMail()
    {
        return $this->_mail;
    }

    /**
     * Setter du mail
     * @param $strMail
     * @return void
     */
    public function setMail($strMail)
    {
        $this->_mail = strtolower(trim($strMail));
    }

    /**
     * Getter du mot de passe
     * @return string
     */
    public function getPwd()
    {
        return $this->_pwd;
    }

    /**
     * Setter du mot de passe
     * @param $strPwd
     * @return void
     */
    public function setPwd($strPwd)
    {
        $this->_pwd = $strPwd;
    }
       

    public function getPwdHash()
    {
        return password_hash($this->_pwd, PASSWORD_DEFAULT);
    }    
        
}