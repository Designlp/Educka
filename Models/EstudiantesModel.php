<?php 
//Moises
    class EstudiantesModel extends Mysql{
        //Nivel de accesos
        private $intidusuario;
        private $intidrol;
        private $strci;
        private $strnombre;
        private $strapellido;
        private $strcorreo;
        private $intestado;
        private $inttelefono;
        private $intci;

        private $strpassword;
        private $intsuscripcion;
        private $strtoken;

        public function __construct() {

            parent::__construct();
        }
        //YO
        public function selectestudiantes(){
            $sql= "SELECT tu.idusuario, tu.idroles, tu.nombre, tu.apellidos, tu.correo, tu.telefono,tu.password,tu.suscripcion, tu.estado, tr.tipo 
            FROM tusuarios tu 
            JOIN troles tr ON tu.idroles = tr.idroles 
            WHERE tu.estado != 0 AND tr.estado = 1";
            $request=$this->selectall($sql);
            return $request;
        }

        public function selectestudiante(int $iduser){
            $this->intidusuario= $iduser;
            $sql= "SELECT tu.idusuario, tu.ci, tu.nombre, tu.apellidos, tu.correo, tu.telefono, tu.estado
            FROM tusuarios tu
            WHERE tu.idusuario = $this->intidusuario";
            $request=$this->select($sql);
            return $request;
        }


        public function insertestudiantes(int $idrol,string $ci, string $nombre, string $apellido, int $telefono,string $email,  string $suscripcion ,string $password, int $estado){
            $this->intidrol = $idrol;
			$this->intci = $ci;
			$this->strnombre = $nombre;
			$this->strapellido = $apellido;
			$this->inttelefono = $telefono;
            $this->strcorreo = $email;
            $this->intsuscripcion = $suscripcion;
            $this->strpassword = $password;
			$this->intestado = $estado;
            
			$return = 0;
			$sql = "SELECT * FROM tusuarios 
                    WHERE correo = '{$this->strcorreo}' OR ci = '{$this->intci}'";
			$request = $this->selectall($sql);

			if(empty($request))
			{
				$query  = "INSERT INTO tusuarios(idroles,ci,nombre, apellidos, telefono, correo, suscripcion, password ,estado) 
								  VALUES(?,?,?,?,?,?,?,?,?)";
	        	$arrdata = array($this->intidrol,
        						$this->intci,
        						$this->strnombre,
                                $this->strapellido,
        						$this->inttelefono,
        						$this->strcorreo,
                                $this->intsuscripcion,
                                $this->strpassword,
                                $this->intestado
                            );
	        	$request = $this->insert($query,$arrdata);
	        	$return = $request;
			}else{
                $return=-1; 
            }
            
            return $return;
        }
        //Update
        public function updateestudiantes(int $idusuario,string $ci,string $nombre, string $apellido, string $correo ,int $telefono, int $estado){
			
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