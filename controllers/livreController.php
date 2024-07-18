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

            $this->_display("addBook");
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