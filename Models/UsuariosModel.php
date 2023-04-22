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
                    WHERE Correo = '{$this->strcorreo}' OR ci = '{$this->strci}' OR Nit = '{$this->intnit}' ";
			$request = $this->selectall($sql);

			if(empty($request))
			{
				$query  = "INSERT INTO tusuarios(IdRoles,ci,Nit,Nombre,NombreFiscal,Apellido,Telefono,Correo,Direccion,Contrasenia,Estado) 
								  VALUES(?,?,?,?,?,?,?,?,?,?,?)";
	        	$arrdata = array($this->intidrol,
        						$this->strci,
        						$this->intnit,
        						$this->strnombre,
        						$this->strnombretr,
                                $this->strapellido,
        						$this->inttelefono,
        						$this->strcorreo,
        						$this->strdireccion,
                                $this->strpassword,
                                $this->intstatus,
                            );
	        	$request = $this->insert($query,$arrdata);
	        	$return = $request;
			}else{
                $return=-1;
            }
            
            return $return;
        }
    }

?>