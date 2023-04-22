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
            if($_POST){	
            if(empty($_POST['txtnombre']) || empty($_POST['txtapellido']) || empty($_POST['txtcorreo']) )
            {
                $arrresponse = array("status" => false, "msg" => 'Datos incorrectos.');
            }else{ 
                $idUsuario = intval($_POST['idusuario']);
                $strnombre = ucwords(strclean($_POST['txtnombre']));
                $strapellido = ucwords(strclean($_POST['txtapellido']));
                $strcorreo = strtolower(strclean($_POST['txttelefono']));
                $strdireccion = strclean($_POST['txtcorrreo']);
                $inttelefono = intval(strclean($_POST['txtcontrasenia']));
                $intidrol=intval($_POST['txtrol']);

                if($idUsuario == 0)
                {
                    $option = 1;
                    $strpassword =  empty($_POST['txtcontrasenia']) ? passgenerator() : $_POST['txtcontrasenia'];
                    $strpasswordencript=hash("SHA256",$strpassword);
                    $requestusuario = $this->model->insertusuario(
                    $intidrol=$intidrol,
                    $strci,
                    $strnombre, 
                    $strapellido, 
                    $strcorreo, 
                    $strdireccion,
                    $inttelefono, 
                    $strnombretr,
                    $intnit,
                    $strpasswordencript, 
                    $intstatus
                 );
                }else{
                    $option = 2;
                    $strpassword =  empty($_POST['txtcontrasenia']) ? "" : hash("SHA256",$_POST['txtcontrasenia']);
                    $requestusuario = $this->model->updateusuario(
                    $intidrol=$intidrol,
                    $idUsuario,
                    $strci,
                    $strnombre, 
                    $strapellido, 
                    $strcorreo, 
                    $strdireccion,
                    $inttelefono, 
                    $strnombretr,
                    $intnit,
                    $strpassword, 
                    $intstatus

                    );

                }
                if($requestusuario > 0){

                    if($option == 1 ){
                        $arrresponse= array('status'=>true,'msg'=>'Datos Guardados Correctamente');
                        $nombreuser= $strnombre.' '.$strapellido;
                        $stremail= $strcorreo;
                        $datausuario = array(
                            'nombreuser'=>$nombreuser,
                            'email'=>$stremail,
                            'password'=>$strpassword,
                            'asunto'=>'Bienvenido a tu tienda en línea'
                         
                        );
                        sendEmail($datausuario,'emailbienvenida');

                    }
                    if($option == 2 ){
                        $arrresponse= array('status'=>true,'msg'=>'Datos Actualizados Correctamente');
                    }
                    
               }else{
                    if($requestusuario == -1){
                        $arrresponse= array('status'=>false,'msg'=>'!Atencion! El usuario ya existe');
                    }else
                    $arrresponse= array('status'=>true,'msg'=>'No se almaceno los datos');
               }
            }
            echo json_encode($arrresponse,JSON_UNESCAPED_UNICODE);
        }
        die();
        }






    }
?>