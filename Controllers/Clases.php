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

            for($i=0;$i< count($arrdata);$i++){
                if($arrdata[$i]['estado']==1){
                    $arrdata[$i]['estado']='<span class="badge badge-pill badge-success">Activo</span>';
                }else{
                    $arrdata[$i]['estado']='<span class="badge badge-pill badge-danger">Inactivo</span>';
                }

              
                $crudopciones='<div class="dropdown">
                <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                <div class="dropdown-menu dropdown-menu-right" style="">
                
                    <a class="dropdown-item btneditcurso" rl="'.$arrdata[$i]['idcurso'].'">Editar</a>
                    <a class="dropdown-item btnclases" rl="'.$arrdata[$i]['idcurso'].'">Clases</a>
                    <div class="dropdown-divider"></div>
                    <a  class="dropdown-item text-danger btndelcurso" rl="'.$arrdata[$i]['idcurso'].'">Eliminar</a>
                </div>
                </div>';

                if($i == (count($arrdata)-1)){
                    //Necesario agregar para que funciones las funciones de delete y update
                    $script='<script type="text/javascript"> fnteditcurso(); fntclasescurso(); fntdelcurso();</script>';
                }

                $arrdata[$i]['acciones']= '<div class="text-center">'.$crudopciones.' '.$script.'</div>';
            }
            
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
        public function setclase(){
            dep($_POST);
            $idcurso = $_SESSION['idcurso'];
            $intidclase=intval($_POST['idclase']);
            $strtitulo=strclean($_POST['txttitulo']);
            $strdescripcion=strclean($_POST['txtdescripcion']);
            $strenlace=$_POST['txtenlace'];

            $intstatus=intval(1);
            
 
            if($intidclase == 0){
                 $requestrol=$this->model->insertclase($idcurso,$strtitulo, $strdescripcion,$strenlace,$intstatus);
                 $option=1;
            }
            if($intidclase != 0){
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
