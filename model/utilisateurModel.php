<?php
/*

stocke le CRUD

*/ 

require("connexion.php");

class UtilisateurModel extends Connexion
{
	public function __construct()
    {
        parent::__construct();
    }

    public function rechercheMail(string $email)
    {
        $strQuery = "SELECT * FROM utilisateur WHERE email = :email";
        $strRqPrep = $this->_db->prepare($strQuery);
        $strRqPrep->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $strRqPrep->execute();
        $resultat = $strRqPrep->fetch(PDO::FETCH_ASSOC);

        return $resultat;

    }

    


    // cherche a savoir si le mail et le mot de passe inserer en post existe dans la base de donneer

    public function findByMailAndPwd(): array|bool 
    {
        // Vérifie l'utilisateur par son mail
        $strQuery = "SELECT pseudo, email, mdp
                     FROM utilisateur 
                     WHERE email = :email;";
        $strRqPrep = $this->_db->prepare($strQuery);
        
        $strRqPrep->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
        $strRqPrep->execute();
        $arrUser = $strRqPrep->fetch();
        var_dump($arrUser);

        // Vérification du mot de passe
        if ($arrUser!== false && password_verify($_POST['password'], $arrUser['mdp'])) 
        {
            unset($arrUser['mdp']);
            return $arrUser;
        }
        return false;
    }


    public function findByPseudoAndPwd(): array|bool 
    {
        // Verify l'utlisateur par le pseudo
        $strQuery = "SELECT u.idUtilisateur, u.pseudo, u.email, u.mdp, s.statut, r.role
                    FROM utilisateur u
                    INNER JOIN statut s ON u.idStatut = s.idStatut
                    INNER JOIN roleutilisateur r ON u.idRole = r.idRole
                    WHERE u.pseudo = :pseudo; ";

        $strRqPrep = $this->_db->prepare($strQuery);
        $strRqPrep->bindValue(":pseudo", $_POST['username'], PDO::PARAM_STR);
        $strRqPrep->execute();
        $arrUser = $strRqPrep->fetch();


        // Verify le mot de passe

        if ($arrUser!== false && password_verify($_POST['password'], $arrUser['mdp'])) 
        {
            unset($arrUser['mdp']);

            return $arrUser;

        }

    return false;

}


    // fonction ajoute un utlilisateur qui vient de s'inscrire

    public function createUtilsateur(): bool
    {
        $strQuery = "INSERT INTO utilisateur (pseudo, email, mdp) VALUES (:pseudo, :email, :mdp);";

        $strRqPrep = $this->_db->prepare($strQuery);
        $strRqPrep->bindValue(":pseudo", $_POST['pseudo'], PDO::PARAM_STR);
        $strRqPrep->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
        $strRqPrep->bindValue(":mdp", password_hash($_POST['mdp'], PASSWORD_BCRYPT), PDO::PARAM_STR);
        //$strRqPrep->bindValue(":idStatut", $_POST['statut'], PDO::PARAM_INT);
        //$strRqPrep->bindValue(":idRole", $_POST['role'], PDO::PARAM_INT);

        // execute tous ce qui a ete fait en amont

        $strRqPrep->execute();

        return true;

        

    }


    // fonction qui supprime un utilisateur

    public function delete(): bool
    {
        $strQuery = "DELETE FROM utilisateur WHERE idUtilisateur = :id;";
        $strRqPrep = $this->_db->prepare($strQuery);
        $strRqPrep->bindValue(":id", $_POST['id'], PDO::PARAMINT);
        $strRqPrep->execute();

        return true;

    }


    // fonction update l'utlisateurs

    public function update(): bool
    {
        $strQuery = "UPDATE utilisateur SET pseudo = :pseudo, email = :email, mdp = :mdp, idStatut = :idStatut,idRole = :idRole 
        WHERE idUtilisateur = :id;";
        
        $strRqPrep = $this->_db->prepare($strQuery);
        $strRqPrep->bindValue(":pseudo", $_POST['pseudo'], PDO::PARAMSTR);
        $strRqPrep->bindValue(":email", $_POST['email'], PDO::PARAMSTR);
        $strRqPrep->bindValue(":mdp", password_hash($_POST['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
        $strRqPrep->bindValue(":idStatut", $_POST['statut'],PDO::PARAM_INT);
        $strRqPrep->bindValue(":idRole", $_POST['role'], PDO::PARAM_INT);
        $strRqPrep->bindValue(":id", $_POST['id'], PDO::PARAM_INT);
        $strRqPrep->execute();

        return true;

    }
    

    
    
}