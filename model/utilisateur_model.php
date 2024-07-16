<?php
require("dataBaseConnect.php");

class UtilisateurModel extends Connexion_a_la_base_de_donnee
{
	public function __construct()
    {
        parent::__construct();
    }

    // cherche a savoir si le mail et le mot de passe inserer en post existe dans la base de donneer
    public function findByMailAndPwd(): array|bool 
    {
        // Verify l'utlisateur par l'email
        $strQuery = "SELECT u.idUtilisateur, u.pseudo, u.email, u.motDePasse, s.statut, r.role
                     FROM utilisateur u
                     INNER JOIN statut s ON u.idStatut = s.idStatut
                     INNER JOIN roleutilisateur r ON u.idRole = r.idRole
                     WHERE u.email = :mail; ";
        $strRqPrep = $this->_db->prepare($strQuery);
        $strRqPrep->bindValue(":mail", $_POST['mail'], PDO::PARAM_STR);
        $strRqPrep->execute();
        $arrUser = $strRqPrep->fetch();
    
        // Verify le mot de passe
        if ($arrUser !== false && password_verify($_POST['password'], $arrUser['motDePasse'])) 
        {
            unset($arrUser['motDePasse']);
            return $arrUser;
        }
        return false;
    }

    // fonction ajoute un utlilisateur qui vient de s'inscrire
    public function create(): bool
    {
        $strQuery = "INSERT INTO utilisateur (pseudo, email, motDePasse, id
        Statut, idRole) VALUES (:pseudo, :email, :motDePasse,
        :idStatut, :idRole); ";
        $strRqPrep = $this->_db->prepare($strQuery);
        $strRqPrep->bindValue(":pseudo", $_POST['pseudo'], PDO::PARAMSTR);
        $strRqPrep->bindValue(":email", $_POST['email'], PDO::PARAMSTR);
        $strRqPrep->bindValue(":motDePasse", password_hash($_POST['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
        $strRqPrep->bindValue(":idStatut", $_POST['statut'], PDO::PARAM_INT);
        $strRqPrep->bindValue(":idRole", $_POST['role'], PDO::PARAM_INT);
        
        // execute tous ce qui a ete fait en amont
        $strRqPrep->execute();
        return true;
        
    }

    // fonction qui supprime un utilisateur
    public function delete(): bool
    {
        $strQuery = "DELETE FROM utilisateur WHERE idUtilisateur = :id;";
        $strRqPrep = $this->_db->prepare($strQuery);
        $strRqPrep->bindValue(":id", $_POST['id'], PDO::PARAM
        INT);
        $strRqPrep->execute();
        return true;
    }

    // fonction update l'utlisateurs
    public function update(): bool
    {
        $strQuery = "UPDATE utilisateur SET pseudo = :pseudo, email = :email, mot
        DePasse = :motDePasse, idStatut = :idStatut,
        idRole = :idRole WHERE idUtilisateur = :id;";
        $strRqPrep = $this->_db->prepare($strQuery);
        $strRqPrep->bindValue(":pseudo", $_POST['pseudo'], PDO::PARAM
        STR);
        $strRqPrep->bindValue(":email", $_POST['email'], PDO::PARAM
        STR);
        $strRqPrep->bindValue(":motDePasse", password_hash($_POST['
        password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
        $strRqPrep->bindValue(":idStatut", $_POST['statut'],
        PDO::PARAM_INT);
        $strRqPrep->bindValue(":idRole", $_POST['role'], PDO::
        PARAM_INT);
        $strRqPrep->bindValue(":id", $_POST['id'], PDO::PARAM
        INT);
        $strRqPrep->execute();
        return true;
    }
    

    
    
}