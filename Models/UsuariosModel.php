<?php 
//Moises
    class UsuariosModel extends Mysql{

        public $intidusuario;
        public $intidrol;
        public $strnombre;
        public $strapellido;
        public $strcorreo;
        public $strcontrasenia;
        public $intstatus;
        public $inttelefono;
        public $intci;
        public $strdireccion;
        public $intnit;
        public $strnombretr;
  

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
    }

?>