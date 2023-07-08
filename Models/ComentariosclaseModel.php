<?php 
//Moises
    class ComentariosclaseModel extends Mysql{
       //Nivel de accesos

        private $intidcurso;
        
        private $intidclase;
        private $intidprivacidad;
        private $strenlace;
        private $strtitulo;
        private $strdescripcion;

        private $intestado;

        private $strfilename;
        private $strfileurl;
        
     

        public function __construct() {

            parent::__construct();
        }
        
    

    }
