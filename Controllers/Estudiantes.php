<?php 
    class Estudiantes extends Controllers{
        public function __construct() {
            parent::__construct();
        }
        
        //Visualizacion
        public function Estudiantes(){

            $data['page_id'] = 1;
            $data['page_tag'] = "Estudiantes";
            $data['page_title']= "Pagina Principal";
            $data['page_name'] = "estudiantes";
            $data['page_js'] = "functionestudiantes.js";
    
            $this->views->getview($this,"estudiantes",$data);
            
        }
        //Visualizacion
        public function getestudiantes(){
            $arrdata= $this->model->selectestudiantes();

            for($i=0;$i< count($arrdata);$i++){
                if($arrdata[$i]['estado']==1){
                    $arrdata[$i]['estado']='<span class="badge badge-pill badge-success">Activo</span>';
                }else{
                    $arrdata[$i]['estado']='<span class="badge badge-pill badge-danger">Inactivo</span>';
                }
                //Id Usuario de acuerdo a su tabla en la base de datos esto recupera los datos de la BD
                //El funcion fntwiew ya se inicializa con un evento
                //$btnview='<button class="btn btn-info btn-sm btnviewsstyle btnviewroles" onClick="fntviewcliente('.$arrdata[$i]['idroles'].')" title="Ver usuario"><i class="far fa-eye"></i></button>';
                $btnedit='<button class="btn btn-primary btn-sm btneditstyle btneditestudiantes" rl="'.$arrdata[$i]['idusuario'].'" title="Editar" type="button"><i class="fas fa-pencil-alt"></i></button>';
                $btndelete='<button class="btn btn-danger btn-sm btndelstyle btndelestudiantes" rl="'.$arrdata[$i]['idusuario'].'" title="Eliminar" type="button"><i class="fas fa-trash-alt"></i></button>';

                if($i == (count($arrdata)-1)){
                    //Necesario agregar para que funciones las funciones de delete y update
                    $script='<script type="text/javascript"> fnteditestudiantes(); fntdelestudiantes();</script>';
                }

                $arrdata[$i]['acciones']= '<div class="text-center">'.$btnedit.' '.$btndelete.' '.$script.'</div>';
            }
            
            echo json_encode($arrdata,JSON_UNESCAPED_UNICODE);
            die();
        }



    }
?>