<?php 
//Moises
    class CategoriasModel extends Mysql{
        //Nivel de accesos
        private $intcategorias;
        private $strnombre;
        private $strdescripcion;
        private $intestado;

        public function __construct() {

            parent::__construct();
        }
        //YO
        public function seleccategorias(){
            $sql= "SELECT tc.idcategoria, tc.nombre, tc.descripcion, tc.estado
            FROM tcategoria tc 
            WHERE tc.estado != 0";
            $request=$this->selectall($sql);
            return $request;
        }

        public function selectcategoria(int $iduser){
            $this->intcategorias= $iduser;
            $sql= "SELECT tc.idcategoria, tc.nombre, tc.descripcion, tu.estado
            FROM tcategoria tc
            WHERE tc.idcategoria = $this->intcategorias";
            $request=$this->select($sql);
            return $request;
        }


        public function insertcategorias(string $nombre, string $descripcion, int $estado){
			$this->strnombre = $nombre;
			$this->strdescripcion = $descripcion;
			$this->intestado = $estado;
            
			$return = 0;

			$sql = "SELECT * FROM tcategoria
                    WHERE nombre = '{$this->strnombre}'";
			$request = $this->selectall($sql);

			if(empty($request))
			{
				$query  = "INSERT INTO tcategoria(nombre, descripcion, estado) 
								  VALUES(?,?,?)";
	        	$arrdata = array($this->strnombre,
                                $this->strdescripcion,
                                $this->intestado,
                            );
	        	$request = $this->insert($query,$arrdata);
	        	$return = $request;
			}else{
                $return=-1; 
            }
            
            return $return;
        }
        //Update
        public function updatecategorias(int $idusuario,string $ci,string $nombre, string $apellido, string $correo ,int $telefono, int $estado){
			
            $this->intidusuario = $idusuario;
			$this->strci        = $ci;
			$this->strnombre    = $nombre;
			$this->strapellido  = $apellido;
            $this->strcorreo = $correo;
			$this->inttelefono  = $telefono;
            $this->intestado     = $estado;
            

            $sql= "SELECT * FROM tusuarios WHERE nombre='{$this->strnombre}' AND apellidos='{$this->strapellido}' AND idusuario != $this->intidusuario";
            $requestupdate = $this->selectall($sql);
            
            if(empty($requestupdate)){

                    $queryupdate="UPDATE tusuarios SET ci=?, nombre=?, apellidos=?, correo=?,telefono=?,estado=? WHERE idusuario=$this->intidusuario";
                    $arrdata = array(
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
   
        public function settokenuser(int $iduser, string $token){
            $this->intidusuario = $iduser;
            $this->strtoken= $token;
            $queryupdate="UPDATE tusuarios SET token = ? WHERE idusuario =$this->intidusuario";
            $arrdata = array($this->strtoken);
            $requestupdate= $this->update($queryupdate,$arrdata);
            return $requestupdate;
                
        }
        //Delete
      


    }

?>