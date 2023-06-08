<?php 
    class Cuenta extends Controllers{
        public function __construct() {
            parent::__construct();
            session_start();
            if(empty($_SESSION['login'])){
                header('Location: '.base_url()."/login");
            }
        }
        
        //Visualizacion
        public function Cuenta(){
            $data['page_tag'] = "Cuentas";
            $data['page_title']= "Pagina Principal";
            $data['page_name'] = "cuentas";
            $data['page_js'] = "functioncuenta.js";
            $this->views->getview($this,"cuenta",$data);
        }
        
        //Insert 
        //Logica update como
        public function setcuentas(){
            if($_POST){	
            if(empty($_POST['txtnombre']) || empty($_POST['txtapellido']) )
            {
                $arrresponse = array("status" => false, "msg" => 'Datos incorrectos.');
            }else{ 
                // No importa el orden de las variables
                $intidautor=$_SESSION['iduser'];
                $strci = ucwords(strclean($_POST['txtci']));
                $strnombre = ucwords(strclean($_POST['txtnombre']));
                $strapellido = ucwords(strclean($_POST['txtapellido']));
                $strtelefono = ucwords(strclean($_POST['txttelefono']));
                if($intidautor != 0){
                    $requestcategorias = $this->model->updatecuenta(
                    $intidautor,
                    $strci,
                    $strnombre, 
                    $strapellido, 
                    $strtelefono
                    );
                    $option = 2;
                }
                if($requestcategorias > 0){
 
                    if($option == 1 ){
                        $arrresponse= array('status'=>true,'msg'=>'Datos Guardados Correctamente');
                    }
                    if($option == 2 ){
                        $arrresponse= array('status'=>true,'msg'=>'Datos Actualizados Correctamente');
                    }
                    
               }else{
                    if($requestcategorias == -1){
                        $arrresponse= array('status'=>false,'msg'=>'!Atencion! El rol ya existe');
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