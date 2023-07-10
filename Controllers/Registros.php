<?php 
    class Registros extends Controllers{
        public function __construct() {
            parent::__construct();
            session_start();
            if(empty($_SESSION['login'])){
                header('Location: '.base_url()."/login");
            }
            //getpermisos(3);
        }
        
        //Visualizacion
        public function Registros(){
            $data['page_tag'] = "Registros";
            $data['page_title']= "Pagina Principal";
            $data['page_name'] = "registros";
            $data['page_js'] = "functionregistros.js";
            $this->views->getview($this,"registros",$data);
        }
    
        //Insert 
        //Logica update como
        public function setregistros(){
            if($_POST){	
            if(empty($_POST['txtnombre']) || empty($_POST['txtapellido']) || empty($_POST['txttelefono'])||  empty($_POST['txtci']) ||  empty($_POST['txtcorreo']) || empty($_POST['txtcontras']))
            {
                $arrresponse = array("status" => false, "msg" => 'Datos incorrectos.');
            }else{ 
                // No importa el orden de las variables
                $idusuario = intval($_POST['idusuario']);
                $strci = strclean($_POST['txtci']);
                $strnombre = ucwords(strclean($_POST['txtnombre']));
                $strapellido = ucwords(strclean($_POST['txtapellido']));
                $inttelefono = intval(strclean($_POST['txttelefono']));
                $strcorreo = strtolower(strclean($_POST['txtcorreo']));
                $intestado = intval(strclean($_POST['liststatus']));
                $intidrol=intval(3);
                $intsuscripcion = intval(0);
                //Esto se basa en el id oculto que se usa en rl 
                if($idusuario == 0)
                {
                    //Se incrementa mediante la respuesta del request de model
                    $option = 1;
                    $strpassword =  empty($_POST['txtcontrasenia']) ? passgenerator() : $_POST['txtcontrasenia'];
                    $strpasswordencript=hash("SHA256",$strpassword);

                    $requestusuario = $this->model->insertregistro(
                    $intidrol,
                    $strci,
                    $strnombre, 
                    $strapellido, 
                    $strcorreo,
                    $inttelefono,
                    $intsuscripcion,
                    $strpasswordencript,
                    $intestado
                 );
                if($requestusuario > 0){

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
