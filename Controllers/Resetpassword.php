<?php 
    class Resetpassword extends Controllers{
        public function __construct() {
            parent::__construct();
        }
        public function Resetpassword(){

            //$data['page_id'] = 1;
            $data['page_tag'] = "Dashboard";
            $data['page_title']= "Dashboard";
            $data['page_name'] = "Dashboard";
            $data['page_js'] = "functionlogin.js";
            session_start();
            $this->views->getview($this,"resetpassword",$data);
            
        }


    }
?>