<?php

session_start();

require('controller/motherController.php');


/* Dispatcher  */
    $strCtrl    = $_GET['controller']??'page';
    $strMethod  = $_GET['action']??'index';
    

    // Mettre les tests de vérification sinon 404
    $boolNotFound   = false;

    $strFile    = "controller/".$strCtrl."Controller.php";    



    if (file_exists($strFile)) 
    {// Si le fichier existe
        require_once($strFile);

        $strCtrlName = ucfirst($strCtrl) . "Controller";
        
        if (class_exists($strCtrlName))
        {// Si la classe existe (après inclusion du fichier)
            $objController = new $strCtrlName();
            
            if (method_exists($objController, $strMethod)) // Si la méthode demandée existe dans l'objet instancié
            { 
                $objController->$strMethod();
            }
            
            else
            {
                $boolNotFound = true;
            }
        }
        
        else
        {
            $boolNotFound = true;
        }
    }
    else
    {
        $boolNotFound = true;
    }

    if ($boolNotFound) 
    {
        header("Location:index.php?controller=error&action=error_404");
    }