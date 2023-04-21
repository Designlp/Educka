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
        public function getusuarios(){
            $arrdata= $this->model->selectusuarios();

            for($i=0;$i< count($arrdata);$i++){
                if($arrdata[$i]['estado']==1){
                    $arrdata[$i]['estado']='<span class="badge badge-pill badge-success">Activo</span>';
                }else{
                    $arrdata[$i]['estado']='<span class="badge badge-pill badge-danger">Inactivo</span>';
                }
            }

            echo json_encode($arrdata,JSON_UNESCAPED_UNICODE);
            die();
        }

    }
?>