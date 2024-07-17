<?php

    class Controller
    {

        protected $_arrData = array();

        protected function _display($strView)
        {
            /*$strH1      = $this->_arrData['strH1'];
            $strPar     = $this->_arrData['strPar'];
            $strPage    = $this->_arrData['strPage'];*/

            foreach($this->_arrData as $key=>$value)
            {
                $$key     = $value;
            }

            include("vue/_partial/header.php");
            include("vue/vue_".$strView.".php");
            include("vue/_partial/footer.php");
        }
    }