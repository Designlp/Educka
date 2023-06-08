<?php 
    class Video extends Controllers{
        public function __construct() {
            parent::__construct();
            session_start();
          
        }
            
        //Visualizacion
        public function Video(){

       
            $data['page_tag'] = "Usuarios";
            $data['page_title']= "Pagina Principal";
            $data['page_name'] = "usuarios";
            $data['page_js'] = "functionvideo.js";
    
            $this->views->getview($this,"video",$data);
            
        }


        public function getclase(){
            $idclase = $_SESSION['idclasev'];

            $arrdata= $this->model->selectclase($idclase);
      
            echo json_encode($arrdata,JSON_UNESCAPED_UNICODE);
            die();
        }
   
    }
