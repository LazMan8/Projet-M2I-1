<?php

class Controller{

    protected $_arrData = array();

    protected function _display($strView){
       

        foreach($this->_arrData as $key=>$value){
            $$key     = $value;
        }

        include("views/_partial/header.php");
        include("views/view_".$strView.".php");
        include("views/_partial/footer.php");
    }
}