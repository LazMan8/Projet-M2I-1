<?php

class Controller{

    protected $_arrData = array();

    protected function _display($strView){
       

        foreach($this->_arrData as $key=>$value){
            $$key     = $value;
        }

       // include("views/partial/header.php");
        include("views/".$strView."View.php");
        //include("views/partial/footer.php");
    }
}