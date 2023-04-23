<?php 
//Moises
    class UsuariosModel extends Mysql{

        private $intidusuario;
        private $intidrol;
        private $strnombre;
        private $strapellido;
        private $strcorreo;
        private $intestado;
        private $inttelefono;
        private $intci;

        private $strpassword;
        private $strtoken;

        public function __construct() {

            parent::__construct();
        }
        //YO
        public function selectusuarios(){
            $sql= "SELECT * 
            FROM tusuarios";
            $request=$this->selectall($sql);
            return $request;
        }


        public function insertusuario(int $idrol,string $ci, string $nombre, string $apellido, string $email, int $telefono, string $password,  int $estado){
            $this->intidrol = $idrol;
			$this->intci = $ci;
			$this->strnombre = $nombre;
			$this->strapellido = $apellido;
			$this->strcorreo = $email;
			$this->inttelefono = $telefono;
            $this->strpassword = $password;
			$this->intestado = $estado;
            
			$return = 0;

			$sql = "SELECT * FROM tusuarios 
                    WHERE Correo = '{$this->strcorreo}' OR ci = '{$this->intci}'";
			$request = $this->selectall($sql);

			if(empty($request))
			{
				$query  = "INSERT INTO tusuarios(idroles,ci,nombre,apellidos,telefono,correo,password,estado) 
								  VALUES(?,?,?,?,?,?,?,?)";
	        	$arrdata = array($this->intidrol,
        						$this->intci,
        						$this->strnombre,
                                $this->strapellido,
        						$this->inttelefono,
        						$this->strcorreo,
                                $this->strpassword,
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
        public function updateusuario(int $rol,string $ci,string $nomnbre, string $apellido, int $telefono, int $estado){
			$this->intidrol = $rol;
			$this->strci = $ci;
			$this->strnombre = $nomnbre;
			$this->strapellido = $apellido;
			$this->inttelefono = $telefono;
            $this->intidrol=$estado;
            

            $sql= "SELECT * FROM tusuarios WHERE nombre='{$this->strnombre}' AND apellidos='{$this->strapellido}' AND IdUsuario != $this->intidusuario";
            $requestupdate = $this->selectall($sql);
            
            if(empty($requestupdate)){

                    $queryupdate="UPDATE tusuarios SET IdRoles=?, ci=?,Nit=?,Nombre=?,NombreFiscal=?,Apellido=?,Telefono=?,Correo=?,Direccion=?,Estado=? WHERE IdUsuario=$this->intidusuario";
                    $arrdata = array(
                                $this->intidrol,
        						$this->strci,
        						$this->intnit,
        						$this->strnombre,
        						$this->strnombretr,
                                $this->strapellido,
        						$this->inttelefono,
        						$this->strcorreo,
        						$this->strdireccion,
                           
                                $this->intstatus
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
            $sql= "SELECT tu.IdUsuario, 
            tu.IdRoles, 
            tu.ci, 
            tu.Nombre, 
            tu.Apellido, 
            tu.Telefono, 
            tu.Correo, 
            tu.Direccion, 
            tu.Contrasenia, 
            tu.Estado, 
            tr.Tipo
            FROM tusuarios tu, troles tr WHERE tu.IdRoles = tr.IdRoles AND tu.IdUsuario = $this->intidusuario";
            $request=$this->select($sql);
            return $request;
        }







        public function settokenuser(int $iduser, string $token){
            $this->intidusuario = $iduser;
            $this->strtoken= $token;
            $queryupdate="UPDATE tusuarios SET token = ? WHERE idusuario =$this->intidusuario";
            $arrdata = array($this->strtoken);
            $requestupdate= $this->update($queryupdate,$arrdata);
            return $requestupdate;
                
        }


    }

?>