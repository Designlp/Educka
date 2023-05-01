<?php 
    class Cursos extends Controllers{
        public function __construct() {
            parent::__construct();
            session_start();
            if(empty($_SESSION['login'])){
                header('Location: '.base_url()."/login");
            }
        }
        
        //Visualizacion
        public function Cursos(){

       
            $data['page_tag'] = "Usuarios";
            $data['page_title']= "Pagina Principal";
            $data['page_name'] = "usuarios";
            $data['page_js'] = "functioncursos.js";
    
            $this->views->getview($this,"cursos",$data);
            
        }
        //Visualizacion
        public function getcursos(){
            $arrdata= $this->model->selectcursos();

            for($i=0;$i< count($arrdata);$i++){
                if($arrdata[$i]['estado']==1){
                    $arrdata[$i]['estado']='<span class="badge badge-pill badge-success">Activo</span>';
                }else{
                    $arrdata[$i]['estado']='<span class="badge badge-pill badge-danger">Inactivo</span>';
                }

                if($arrdata[$i]['privado']==1){
                    $arrdata[$i]['privado']='<span class="badge badge-pill badge-success">Activo</span>';
                }else{
                    $arrdata[$i]['privado']='<span class="badge badge-pill badge-danger">Inactivo</span>';
                }
              
                $crudopciones='<div class="dropdown">
                <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                <div class="dropdown-menu dropdown-menu-right" style="">
                
                    <a class="dropdown-item btneditcurso" rl="'.$arrdata[$i]['idcurso'].'">Editar</a>
                    <div class="dropdown-divider"></div>
                    <a  class="dropdown-item text-danger btndelcurso" rl="'.$arrdata[$i]['idcurso'].'">Eliminar</a>
                </div>
                </div>';

                if($i == (count($arrdata)-1)){
                    //Necesario agregar para que funciones las funciones de delete y update
                    $script='<script type="text/javascript"> fnteditcurso(); fntdelcurso();</script>';
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
        public function setcurso(){
            //dep($_POST);
            $intidcurso=intval($_POST['idcurso']);
            $intidautor=$_SESSION['iduser'];
            $strtitulo=strclean($_POST['txttitulo']);
            $strdescripcion=strclean($_POST['txtdescripcion']);
            $intprivate=intval($_POST['listprivado']);
            $intstatus=intval($_POST['liststatus']);
            
 
            if($intidcurso == 0){
                 $requestrol=$this->model->insertcurso($intidautor,$strtitulo,$strdescripcion, $intprivate,$intstatus);
                 $option=1;
            }
            if($intidcurso != 0){
                 $requestrol=$this->model->updatecurso( $intidcurso,$intidautor,$strtitulo,$strdescripcion, $intprivate,$intstatus);
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
 
         public function deletecurso(int $idrol){
            
            $this->intidrol=$idrol;
    

            $sql= "SELECT * FROM tusuarios WHERE IdRoles=$this->intidrol";
            $requestdelete = $this->selectall($sql);
            
            if(empty($requestdelete)){
                $querydelete="UPDATE troles SET Estado=? WHERE IdRoles = $this->intidrol";
                $arrdata = array(0);
                $requestdelete= $this->update($querydelete,$arrdata);

                //$querydelete="DELETE FROM rol  WHERE idrol = $this->intidrol";
                //$arrdata = array(0);
                //$requestdelete= $this->delete($querydelete,$arrdata);

                if($requestdelete){
                    $requestdelete='ok';
                    $return=$requestdelete;
                }else{
                    $request='error';
                    $return=$request;
                }
                
            }else{
                $return='existe';
            }
            
            return $return;

        }



    }
