<?php 
//Moises
    class ResetpasswordModel extends Mysql{
        //Nivel de accesos
    

        public function __construct() {

            parent::__construct();
        }


        public function getuseremail(string $email){
            $this->struser=$email;
         
            $sql= "SELECT idusuario , nombre, apellidos, estado FROM tusuarios WHERE correo='$this->struser' AND estado = 1";
            $request=$this->select($sql);
            return $request;
        }
       
      
    }

?>