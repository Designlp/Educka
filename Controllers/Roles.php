<?php 
    class Roles extends Controllers{
        public function __construct() {
            parent::__construct();
        }
        
        //Visualizacion
        public function Roles(){

            $data['page_id'] = 1;
            $data['page_tag'] = "Roles";
            $data['page_title']= "Pagina Principal";
            $data['page_name'] = "roles";
            $data['page_js'] = "functionroles.js";
    
            $this->views->getview($this,"roles",$data);
            
        }
        //Visualizacion
        public function getroles(){
            $arrdata= $this->model->selectroles();

            for($i=0;$i< count($arrdata);$i++){
                if($arrdata[$i]['estado']==1){
                    $arrdata[$i]['estado']='<span class="badge badge-pill badge-success">Activo</span>';
                }else{
                    $arrdata[$i]['estado']='<span class="badge badge-pill badge-danger">Inactivo</span>';
                }
                //Id Usuario de acuerdo a su tabla en la base de datos esto recupera los datos de la BD
                //El funcion fntwiew ya se inicializa con un evento
                $btnview='<button class="btn btn-info btn-sm btnviewsstyle btnviewroles" onClick="fntviewcliente('.$arrdata[$i]['idroles'].')" title="Ver usuario"><i class="far fa-eye"></i></button>';
                $btnedit='<button class="btn btn-primary btn-sm btneditstyle btneditroles" rl="'.$arrdata[$i]['idroles'].'" title="Editar" type="button"><i class="fas fa-pencil-alt"></i></button>';
                $btndelete='<button class="btn btn-danger btn-sm btndelstyle btndelroles" rl="'.$arrdata[$i]['idusuidrolesario'].'" title="Eliminar" type="button"><i class="fas fa-trash-alt"></i></button>';

                if($i == (count($arrdata)-1)){
                    //Necesario agregar para que funciones las funciones de delete y update
                    $script='<script type="text/javascript"> fnteditusuario(); fntdelusuario();</script>';
                }

                $arrdata[$i]['acciones']= '<div class="text-center">'.$btnview.' '.$btnedit.' '.$btndelete.' '.$script.'</div>';
            }
            
            echo json_encode($arrdata,JSON_UNESCAPED_UNICODE);
            die();
        }


        //Insert 
        //Logica update como
        public function setroles(){
            if($_POST){	
            if(empty($_POST['txttipo']) || empty($_POST['txtdescripcion']))
            {
                $arrresponse = array("status" => false, "msg" => 'Datos incorrectos.');
            }else{ 
                // No importa el orden de las variables
                $idrol = intval($_POST['idrol']);
                $strtipo = ucwords(strclean($_POST['txttipo']));
                $strdescripcion = ucwords(strclean($_POST['txtdescripcion']));
                $intestado = intval(strclean($_POST['liststatus']));
                //Esto se basa en el id oculto que se usa en rl 
                //Modo sencillo
                if($idrol == 0){
                    $requestrol=$this->model->insertrol($strtipo,$strdescripcion,$intestado);
                    $option=1;
               }
               if($idrol != 0){
                    $requestrol=$this->model->updaterol( $intidrol,$strrol,$strdescripcion,$intstatus);
                    $option=2;
               }

                if($requestrol > 0){

                    if($option == 1 ){
                        $arrresponse= array('status'=>true,'msg'=>'Datos Guardados Correctamente');
                        $token= token();
                        $nombreuser= $strnombre.' '.$strapellido;
                        $stremail = strtolower(strclean($strcorreo));
                        
                        $urlrecuperar= base_url().'/Login/confirmuser/'.$stremail.'/'.$token;
                        $requestupdate = $this->model->settokenuser($requestusuario,$token);

                           $datausuario = array(
                            'nombreuser'=>$nombreuser,
                            'email'=>$stremail,
                            'asunto'=>'Recuperar cuenta - '.NOMBRE_REMITENTE,
                            'urlrecuperacion'=>$urlrecuperar
                        );
                        $sendemail= sendEmail($datausuario,'emailcambiopassword');

                    }
                    if($option == 2 ){
                        $arrresponse= array('status'=>true,'msg'=>'Datos Actualizados Correctamente');
                    }
                    
               }else{
                    if($requestrol == -1){
                        $arrresponse= array('status'=>false,'msg'=>'!Atencion! El usuario ya existe');
                    }else
                    $arrresponse= array('status'=>true,'msg'=>'No se almaceno los datos');
               }
            }
            echo json_encode($arrresponse,JSON_UNESCAPED_UNICODE);
        }
        die();
        }
        //Update
        public function getusuario($idusuario){
            
            $intkey=intval(strclean($idusuario));
            if ($intkey>0){
                $arrdata = $this->model->selectusuario($intkey);
                if(empty($arrdata)){
                    $arrresponse= array('status'=>false,'msg'=>'Datos no encontrados');
                }else{
                    $arrresponse= array('status'=>true,'data'=>$arrdata);
                }
                echo json_encode($arrresponse,JSON_UNESCAPED_UNICODE);
            }
            die();
        }
        //Especial funciones de visualizacion

        public function getselectroles(){

            $htmloptions="";
            $arrdata = $this->model->selectroles();
            if(count($arrdata) > 0){
                for($i=0;$i < count($arrdata); $i++){
                    $htmloptions.='<option value="'.$arrdata[$i]['idroles'].'">'.$arrdata[$i]['tipo'].'</option>';
                }
            }
            echo $htmloptions;
            die();

        }

        //Delete
        public function delusuario(){
            if($_POST){
                
                $intidusuario=intval($_POST['idusuario']);
                
                $requestdelete=$this->model->deleteusaurio($intidusuario);

                if($requestdelete == 'ok'){
                    $arrresponse= array('status'=>true,'msg'=>'Datos Eliminados Correctamente '.$requestdelete);
                
                }else{
                    if($requestdelete == 'existe'){
                        $arrresponse= array('status'=>false,'msg'=>'No es Posible Eliminar un rol asociado a un usuario'.$requestdelete);
                    }else
                        $arrresponse= array('status'=>true,'msg'=>'No se elimino los datos'.$requestdelete);
               }
               echo json_encode($arrresponse,JSON_UNESCAPED_UNICODE);
            }
            die();
    }



    }
?>