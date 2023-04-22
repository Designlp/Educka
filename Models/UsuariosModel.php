<?php 
//Moises
    class UsuariosModel extends Mysql{

        public $intidusuario;
        public $intidrol;
        public $strnombre;
        public $strapellido;
        public $strcorreo;
        public $intestado;
        public $inttelefono;
        public $intci;

        public $strpassword;
  

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
                           
                                $this->intstatus,
                $requestupdate= $this->update($queryupdate,$arrdata);
                $return=$requestupdate;
                
            }else{
                $return=-1;
            }
            
            return $return;

        }







        public function settokenuser(int $iduser, string $token){
            $this->intiduser = $iduser;
            $this->strtoken= $token;
            $queryupdate="UPDATE tusuarios SET token = ? WHERE idusuario =$this->intiduser";
            $arrdata = array($this->strtoken);
            $requestupdate= $this->update($queryupdate,$arrdata);
            return $requestupdate;
                
        }


    }

?>