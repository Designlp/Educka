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

        private $intsuscripcion;
      


        public function __construct() {
            parent::__construct();
        }
        //Visualizacion
        public function selectestudiantes(){
          
            $sql= "SELECT tu.idusuario, tu.idroles ,tu.nombre, tu.apellidos, tu.correo, tu.telefono,tu.suscripcion, tu.estado, tr.tipo 
            FROM tusuarios tu 
            JOIN troles tr ON tu.idroles = tr.idroles 
            WHERE tu.estado != 0 AND tr.estado = 1";
            $request=$this->selectall($sql);
            return $request;
        }
   

    }

?>