<?php 
    class Resetpassword extends Controllers{
        public function __construct() {
            parent::__construct();
        }
        public function Resetpassword(){

            $data['page_js'] = "functionresetpassword.js";
            session_start();
            $this->views->getview($this,"resetpassword",$data);
            
        }


    }
?>