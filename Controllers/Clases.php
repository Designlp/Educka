<?php 
    class Clases extends Controllers{
        public function __construct() {
            parent::__construct();
            session_start();
            if(empty($_SESSION['login'])){
                header('Location: '.base_url()."/login");
            }
        }
        
        //Visualizacion
        public function Clases(){

       
            $data['page_tag'] = "Usuarios";
            $data['page_title']= "Pagina Principal";
            $data['page_name'] = "usuarios";
            $data['page_js'] = "functionclases.js";
    
            $this->views->getview($this,"clases",$data);
            
        }
        //Visualizacion
        public function getclases(){
            $idcurso = $_SESSION['idcurso'];
            $arrdata= $this->model->selectclases($idcurso);

            
            echo json_encode($arrdata,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function getcurso($idcurso){
            
            $intkey=intval(strclean($idcurso));
            if ($intkey>0){
                $arrdata = $this->model->selectcurso($intkey);
                if(empty($arrdata)){
                    $arrresponse= array('status'=>false,'msg'=>'Datos no encontrados');
                }else{
                    $arrresponse= array('status'=>true,'data'=>$arrdata);
                }
                echo json_encode($arrresponse,JSON_UNESCAPED_UNICODE);
            }
            die();
        }


        //Insert 
        //Logica update como
        public function setcurso(){
            //dep($_POST);
            $intidcurso=intval($_POST['idcurso']);
            $intidautor=$_SESSION['iduser'];
            $strtitulo=strclean($_POST['txttitulo']);
            $strdescripcion=strclean($_POST['txtdescripcion']);
            $intprivate=intval($_POST['listpriv']);
            $intstatus=intval($_POST['liststatus']);
            
 
            if($intidcurso == 0){
                 $requestrol=$this->model->insertcurso($intidautor,$strtitulo,$strdescripcion, $intprivate,$intstatus);
                 $option=1;
            }
            if($intidcurso != 0){
                 $requestrol=$this->model->updatecurso( $intidcurso,$strtitulo,$strdescripcion, $intprivate,$intstatus);
                 $option=2;
            }
 
            if($requestrol > 0){
 
                 if($option == 1 ){
                     $arrresponse= array('status'=>true,'msg'=>'Datos Guardados Correctamente');
                 }
                 if($option == 2 ){
                     $arrresponse= array('status'=>true,'msg'=>'Datos Actualizados Correctamente');
                 }
                 
            }else{
                 if($requestrol == -1){
                     $arrresponse= array('status'=>false,'msg'=>'!Atencion! El curso ya existe');
                 }else
                 $arrresponse= array('status'=>true,'msg'=>'No se almaceno los datos');
            }
            
            
            echo json_encode($arrresponse,JSON_UNESCAPED_UNICODE);
            die();
            
         }


         public function asingclases($idcurso){
            $_SESSION['iduser']=$idcurso;
            
         }
 
        

         public function delcurso(){
            if($_POST){
                $intidcurso=intval($_POST['idcurso']);
                $requestdelete=$this->model->deletecurso($intidcurso);
                if($requestdelete == 'ok'){
                    $arrresponse= array('status'=>true,'msg'=>'Datos Eliminados Correctamente'.$requestdelete);
                
                }else{
                    if($requestdelete == 'existe'){
                        $arrresponse= array('status'=>false,'msg'=>'No es Posible Eliminar un curso asociado a una leccion'.$requestdelete);
                    }else
                        $arrresponse= array('status'=>true,'msg'=>'No se elimino los datos'.$requestdelete);
               }
               echo json_encode($arrresponse,JSON_UNESCAPED_UNICODE);
            }
            die();
         }



    }
