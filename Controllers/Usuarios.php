<?php 
    class Usuarios extends Controllers{
        public function __construct() {
            parent::__construct();
        }
        public function Usuarios(){

            $data['page_id'] = 1;
            $data['page_tag'] = "Usuarios";
            $data['page_title']= "Pagina Principal";
            $data['page_name'] = "usuarios";
            $data['page_js'] = "functionsusuarios.js";
            session_start();
            $this->views->getview($this,"usuarios",$data);
            
        }


    }
?>