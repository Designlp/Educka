<?php 
//Moises
    class RolesModel extends Mysql{
        //Nivel de accesos
        private $intidrol;
        private $strtipo;
        private $strdescripcion;
        private $intestado;


        public function __construct() {

            parent::__construct();
        }
        //Visualizacion
        public function selectroles(){
          
            $sql="SELECT * FROM troles";
            $request=$this->selectall($sql);
            return $request;
        }
   

        //Insert
        public function insertrol(string $tipo, string $descripcion,  int $estado){
            $return = 0;
            $this->strtipo=$tipo;
            $this->strdescripcion=$descripcion;
            $this->intestado=$estado;

            $sql= "SELECT * FROM troles WHERE tipo='{$this->strtipo}'";
            $requestinsert = $this->selectall($sql);
            if(empty($requestinsert)){
                $queryinsert="INSERT INTO troles(tipo,descripcion,estado) VALUES (?,?,?)";
                $arrdata = array($this->strtipo,$this->strdescripcion,$this->intestado);
                $requestinsert= $this->insert($queryinsert,$arrdata);
                $return = $requestinsert;
            }else{
                $return=-1;
            }
            return $return;
        }
        //Update
        public function updateusuario(int $idusuario, int $rol,string $ci,string $nombre, string $apellido, string $correo,int $telefono, int $estado){
			
            $this->intidusuario = $idusuario;
            $this->intidrol     = $rol;
			$this->strci        = $ci;
			$this->strnombre    = $nombre;
			$this->strapellido  = $apellido;
			$this->strcorreo    = $correo;
			$this->inttelefono  = $telefono;
            $this->intestado     = $estado;
            

            $sql= "SELECT * FROM tusuarios WHERE nombre='{$this->strnombre}' AND apellidos='{$this->strapellido}' AND idusuario != $this->intidusuario";
            $requestupdate = $this->selectall($sql);
            
            if(empty($requestupdate)){

                    $queryupdate="UPDATE tusuarios SET idroles=?, ci=?, nombre=?, apellidos=?, correo=? ,telefono=?,Estado=? WHERE idusuario=$this->intidusuario";
                    $arrdata = array(
                                $this->intidrol,
        						$this->strci,
        						$this->strnombre,
                                $this->strapellido,
        						$this->strcorreo,
        						$this->inttelefono,
                                $this->intestado
                                //Cuidao al borrar
                    );
                $requestupdate= $this->update($queryupdate,$arrdata);
                $return=$requestupdate;
                
            }else{
                $return=-1;
            }
            
            return $return;

        }
        //Pate del Update
        public function selectusuario(int $iduser){
            $this->intidusuario= $iduser;
            $sql= "SELECT tu.idusuario, 
            tu.idroles,  
            tu.ci,
            tu.nombre, 
            tu.apellidos,  
            tu.telefono, 
            tu.correo,  
            tu.estado, 
            tr.tipo
            FROM tusuarios tu, troles tr WHERE tu.idroles = tr.idroles AND tu.idusuario = $this->intidusuario";
            $request=$this->select($sql);
            return $request;
        }
   
     
        //parte del delete
        public function selectrol(int $idrol){
            $this->intidrol= $idrol;
            $sql="SELECT * FROM troles WHERE idroles = $this->intidrol";
            $request=$this->select($sql);
            return $request;
        }



   
        //Delete
        public function deleteusaurio(int $idusuario){
    
            $this->intidusuario=$idusuario;
            $querydelete="UPDATE tusuarios SET estado=? WHERE idusuario = $this->intidusuario";
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
                /*
            }else{
                $return='existe';
            }
            */
            return $return;

        }


    }

?>