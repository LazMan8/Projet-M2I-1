<?php

/**
 * Entité qui représente la structure d'un utilisateur
 */
require_once('entity/mom_entity.php');

class utilisateur extends Entity
{
    

    // attribut de l'utilisateur
    private string $_pseudo = '';
    private string $_mail = '';
    private string $_mdp;
    private string $_statut; // clean / Avertissement / Banne
    private string $_role;

    // tous les getteur 
    public function getPseudo() 
    {
        return $this->_pseudo;
    }
    
    public function getMail() 
    {
        return $this->_mail;
    }
    
    public function getMdp() 
    {
        return $this->_mdp;
    }
    
    public function getStatut() 
    {
        return $this->_statut;
    }
    
    public function getRole() 
    {
        return $this->_role;
    }
    
    
    
    // tous les setteur
    public function setPseudo(string $pseudo)
    {
        $this->_pseudo = $pseudo;
    }
    
    public function setMail(string $mail)
    {
        $this->_mail = $mail;
    }
    
    public function setMdp(string $mdp)
    {
        $this->_mdp = $mdp;
    }
    
    public function setStatut(string $statut)
    {
        $this->_statut = $statut;
    }
    
    public function setRole(string $role)
    {
        $this->_role = $role;
    }



}

