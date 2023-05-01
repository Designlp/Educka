<?php 
//Moises
    class CursosModel extends Mysql{
        //Nivel de accesos

        private $intidcurso;
        private $intidusuario;
        private $intidrol;
        private $strtitulo;
        private $strdescripcion;
        private $intprivado;
        private $intestado;
     

        public function __construct() {

            parent::__construct();
        }
        //YO
        public function selectcursos(){
            $sql= "SELECT tu.idusuario, tu.nombre, tu.apellidos, tc.idcurso , tc.titulo, tc.privado, tc.estado
            FROM tcursos tc 
            JOIN tusuarios tu ON tc.idusuario = tu.idusuario 
            WHERE tc.estado != 0";
            $request=$this->selectall($sql);
            return $request;
        }

        public function selectcurso(int $idcurso){
            $this->intidcurso= $idcurso;

            $sql= "SELECT tu.idusuario, tu.nombre, tu.apellidos, tc.idcurso , tc.descripcion, tc.titulo, tc.privado, tc.estado
            FROM tcursos tc
            JOIN tusuarios tu ON tc.idusuario = tu.idusuario 
            WHERE tc.estado != 0 AND tc.idcurso = $this->intidcurso";

            $request=$this->select($sql);
            return $request;
        }


        public function insertcurso(int $idautor,string $titulo, string $descripcion, int $private, int $estado){
            $this->intidusuario = $idautor;
			$this->strtitulo = $titulo;
			$this->strdescripcion = $descripcion;
            $this->intprivado = $private;
            $this->intestado = $estado;
		
			$return = 0;

			$sql = "SELECT * FROM tcursos 
                    WHERE titulo = '{$this->strtitulo}'";

			$request = $this->selectall($sql);

			if(empty($request))
			{
				$query  = "INSERT INTO tcursos(idusuario,titulo,descripcion,privado,estado) 
								  VALUES(?,?,?,?,?)";
	        	$arrdata = array($this->intidusuario,
        						$this->strtitulo,
        						$this->strdescripcion,
                                $this->intprivado,
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
        public function updatecurso(int $idcurso, int $idautor,string $titulo, string $descripcion, int $private, int $estado){
            
            $this->intidcurso = $idcurso;
            $this->intidusuario = $idautor;
			$this->strtitulo = $titulo;
			$this->strdescripcion = $descripcion;
            $this->intprivado = $private;
            $this->intestado = $estado;

            $sql = "SELECT * FROM tcursos 
                    WHERE titulo = '{$this->strtitulo}' AND idcurso != $this->intidcurso";

            $requestupdate = $this->selectall($sql);
            
            if(empty($requestupdate)){
                $queryupdate="UPDATE tcursos SET titulo=?,descripcion=? ,privado = ?, estado = ? WHERE idcurso=$this->intidcurso";
                $arrdata = array($this->strtitulo,$this->strdescripcion,$this->intprivado,$this->intestado);
                $requestupdate= $this->update($queryupdate,$arrdata);
                $return=$requestupdate;
            }else{
                $return=-1;
            }
            
            return $return;

        }
        //Pate del Update
    
        //Especial
        public function selectroles(){
          
            $sql="SELECT * FROM troles WHERE estado != 0";
            $request=$this->selectall($sql);
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
        //Delete
      


    }

?>