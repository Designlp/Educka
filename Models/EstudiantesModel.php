<?php 
//Moises
    class EstudiantesModel extends Mysql{
        //Nivel de accesos
        private $intidrol;
        private $strtipo;
        private $strdescripcion;
        private $intestado;


        public function __construct() {
            parent::__construct();
        }
        //Visualizacion
        public function selectestudiantes(){
          
            $sql="SELECT * FROM tusuarios";
            $request=$this->selectall($sql);
            return $request;
        }
   

    }

?>