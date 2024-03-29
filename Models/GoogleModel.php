<?php 
//Moises
    class GoogleModel extends Mysql{
        //Nivel de accesos
        private $intidautor;
        private $strci;
        private $strnombre;
        private $strapellido;
        private $strtelefono;
        public function __construct() {

            parent::__construct();
        }
        public function selectusuario(int $iduser){
            $this->intidautor= $iduser;
            $sql= "SELECT tu.idusuario, 
            tu.ci,
            tu.nombre, 
            tu.apellidos,  
            tu.telefono
            FROM tusuarios tu  WHERE tu.idusuario = $this->intidautor";
            $request=$this->select($sql);
            return $request;
        }

        //Update
        public function updatecuenta(int $idaut,string $ci,string $nombre ,string $apellido,string $telefono){

            $this->intidautor = $idaut;
            $this->strci      = $ci;
			$this->strnombre    = $nombre;
			$this->strapellido  = $apellido;
			$this->strtelefono  = $telefono;
            $sql= "SELECT * FROM tusuarios WHERE nombre='$this->strnombre' AND idusuario != $this->intidautor";
            
            $requestupdate = $this->selectall($sql);

            if(empty($requestupdate)){
                    $queryupdate="UPDATE tusuarios SET ci=?, nombre=?,apellidos=?,telefono=? WHERE idusuario =$this->intidautor";
                    $arrdata = array(
                        $this->strci,
                        $this->strnombre,
                        $this->strapellido,
                        $this->strtelefono
                                //Cuidao al borrar
                    );
                $requestupdate= $this->update($queryupdate,$arrdata);
                $return=$requestupdate;
                
            }else{
                $return=-1;
            }
            
            return $return;

        }
   
  


    }

?>