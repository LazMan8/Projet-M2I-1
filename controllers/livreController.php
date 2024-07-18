<?php
    require_once('motherController.php');
    
    /**
     * Controller des livres
     */
    class LivreController extends Controller {
        /**
         * Page Accueil
         * @return void
         */
        public function index(){
            // Variables d'affichage
            $this->_arrData['strH1']	= "Accueil";
            $this->_arrData['strPar']	= "Page affichant les 3 derniers livres";

            // Variables de fonctionnement
            $this->_arrData['strPage'] 	= "index";

            require_once("models/livreModel.php");
            $objModel   = new LivreModel();
            $arrBook = $objModel->findAll(3);
            
            var_dump($_POST); 

            $this->_arrData['arrBookToDisplay'] = $this->_arrayToObject($arrBook);
        
        
            $this->_display("livre");
        }

        /**
         * Page Livre
         * @return void
         */
        public function livre(){
            // Variables d'affichage
            $this->_arrData['strH1']	= "Livre";
            $this->_arrData['strPar']	= "Page affichant tous les livres, avec une zone de recherche sur les livres";

            // Variables de fonctionnement
            $this->_arrData['strPage']	= "livre";

           

            require_once("models/livreModel.php");
            $objModel   = new LivreModel();
            $arrBook = $objModel->findAll();

            // Le tableau d'objet => vue
            $this->_arrData['arrBookToDisplay'] = $this->_arrayToObject($arrBook);
            $this->_display("livre");
        }

        /**
         * Page de création d'un livre
         * @return void
         */
        public function addBook()
        {   
            if (!isset($_SESSION['id']) || $_SESSION['id'] == '') {
                header("Location:index.php?controller=error&action=error_403");// à voir
            }
            // Variables d'affichage
            $this->_arrData['strH1']	= "Ajouter un livre";
            $this->_arrData['strPar']	= "Page permettant d'ajouter un livre";

            // Variables de fonctionnement
            $this->_arrData['strPage'] 	= "addBook";

            /*
            require_once("entities/livreEntity");
            var_dump("$arrBook");
            $objBook = new Livre($arrBook["titre"],$arrBook["nomAuteur"],$arrBook["prenomAuteur"],$arrBook["livreContenu"],$arrBook["anneeParution"],$arrBook["images"], $arrBook["genre"]);
            
        
            require_once("models/livreModel.php");
            $objLivreModel = new LivreModel();
            
        

            // Initialisation du tableau des erreurs
            $arrErrors = array();

            if (count($_POST)>0){
                if($objBook->getTitre() ==""){
                    $arrErrors ['titre'] = "Vous devez saisir le titre";

                }
                if($objBook->getNomAuteur() ==""){
                    $arrErrors ['nomAuteur'] = "Vous devez saisir le nom de l'auteur";
                }
                if($objBook->getPrenomAuteur() ==""){
                    $arrErrors ['prenomAuteur'] = "Vous devez saisir le prénom de l'auteur";
                }
                if($objBook->getLivreContenu() ==""){
                    $arrErrors ['livreContenu'] = "Vous devez saisir le contenu";
                }
                if ($objBook->getAnneeParution() ==""){
                    $arrErrors ['anneeParution'] = "Vous devez saisir l'année de parution";
                }
                if($objBook->getImages() ==""){
                    $arrErrors ['images'] = "Vous devez fournir une image";
                }
                if($objBook->getGenre() ==""){
                    $arrErrors  ['genre'] = "Vous devez saisir le genre";
                }

            }


            // Si formulaire est validé

            if(count($arrErrors == 0)){
                $boolOk = $objLivreModel->addBook();
            }
            if ($boolOk){
                $_SESSION['message'] = "Votre livre a bien été créé.";

                // Redirection vers la page addBook
                header("Location:index.php?controller=livre&action=addBook");
            } else {
                $arrErrors[]= "Erreur. Le livre n'a pas été ajouté";
            }
            // Variables utilisées pourla vue

            $this->_arrData['objBook'] = $objBook;
            $this->_arrData['arrErrors'] = $arrErrors;*/
            
            //Affichage

            //var_dump($_POST);
            $this->_display("addBook"); // $this->display("livreInsere")

        }


        private function _arrayToObject($arrBooks){
            $arrBookToDisplay = array();
            require_once("entities/livreEntity.php");
            // Boucle fonctionnelle qui construit un tableau d'objets
            foreach($arrBooks as $arrBook) {
                $objBook = new Livre($arrBook["titre"],$arrBook["nomAuteur"],$arrBook["prenomAuteur"],$arrBook["livreContenu"],$arrBook["anneeParution"],$arrBook["images"], $arrBook["genre"]);
            
                $arrBookToDisplay[] = $objBook;
            }
            return $arrBookToDisplay;
        }
    }

     //http://localhost/projet120724/PROJET/projetHTML/index.php?controller=livre&action=addBook