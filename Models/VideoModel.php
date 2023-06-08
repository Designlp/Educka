<?php 
//Moises
    class VideoModel extends Mysql{
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
        //YO
    
        public function selectclase(int $idclase){
            $this->intidclase= $idclase;

            $sql= "SELECT tcl.idclases ,tcl.enlace,tcl.privacidad  ,tcl.archivos,tcl.archivourl, tcl.descripcion ,tc.idcurso, tc.titulo AS titcurso, tcl.titulo AS titclase, tcl.estado
            FROM tclases tcl 
            JOIN tcursos tc ON tc.idcurso  = tcl.idcurso  
            WHERE tcl.estado != 0 AND tcl.idclases =  $this->intidclase";

            $request=$this->select($sql);
            return $request;
        }




    }

?>