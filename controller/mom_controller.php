<?php

class Controller
{
    // initialise un tableau(array) a vide
    protected $_arrData = array();

    protected function _display($strVue)
    {
        /*$strH1      = $this->_arrData['strH1'];
        $strPar     = $this->_arrData['strPar'];
        $strPage    = $this->_arrData['strPage'];*/

        foreach($this->_arrData as $key=>$value)
        {
            $$key     = $value;
        }

        include("vue/allP/header.php");
        include("vue/" . $strVue . ".php");
        include("vue/allP/footer.php");
        
    }


        

        
    }