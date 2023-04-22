<?php 
    class Usuarios extends Controllers{
        public function __construct() {
            parent::__construct();
        }
        //Visualizacion
        public function Usuarios(){

            $data['page_id'] = 1;
            $data['page_tag'] = "Usuarios";
            $data['page_title']= "Pagina Principal";
            $data['page_name'] = "usuarios";
            $data['page_js'] = "functionsusuarios.js";
            session_start();
            $this->views->getview($this,"usuarios",$data);
            
        }
        //Visualizacion
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
        //Insert
        public function setusuarios(){
            
            $intidmaterial=intval($_POST['']);
            $strmaterial=strclean($_POST['txtnombre']);
            $strdescripcion=strclean($_POST['txtdescripcion']);
            $intstatus=intval($_POST['liststatus']);
            if($intidmaterial == 0){
                 $requestrol=$this->model->insertmaterials($strmaterial,$strdescripcion,$intstatus);
                 $option=1;
            }
            if($intidmaterial != 0){
                 $requestrol=$this->model->updatematerials( $intidmaterial,$strmaterial,$strdescripcion,$intstatus);
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
                     $arrresponse= array('status'=>false,'msg'=>'!Atencion! El Material ya existe');
                 }else
                 $arrresponse= array('status'=>true,'msg'=>'No se almaceno los datos');
            }
            
            
            echo json_encode($arrresponse,JSON_UNESCAPED_UNICODE);
            die();
            
         }





    }
?>