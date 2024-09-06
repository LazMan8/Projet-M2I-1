<?php

require "../env.php";
require "../app/Models/ConnexionBD.php";
require "../vendor/autoload.php";
require "../app/Controllers/MotherController.php";
require "../app/Entities/MotherEntity.php";
require "../app/Controllers/PersonnelController.php";
require "../app/Controllers/RoleController.php";
require "../app/Views/gestionRole.php";

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// nouvelle instance du PDO
$db = new ConnexionBD();

// nouvelle instance de la classe MotherController pour executer le code
$pcontroller = new PersonnelController();
$roleController = new RoleController();

require "../app/Views/Partial/header.php";
try {
    // si c'est vide alors sa affiche par defaut la page de login
    if (empty($_GET['page'])) {
        //require "../app/Views/login.php";
       // $pcontroller->connexion();
       require "../app/Views/homePage.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);

        switch ($url[0]) {
            case "accueil":
                $pcontroller->connexion();
                break;

            case "login":
                $pcontroller->connexion();
                break;

            case "gestionRole":
                $roleController->affectationRoles();
                break;

            case "deconnexion":
                $pcontroller->deconnexion();
                break;
            case "affectationRole":
                require "../app/Views/affectation.php";
                break;


            case "aff":
                require "../app/views/addRole.php";
                break;

            case "":
                require "../app/Views/homePage.php";
                break;

            case "confirmeDeconnexion":
                require "../app/Views/deconnexionPage.php";
                break;


                
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

require "../app/Views/Partial/footer.php";