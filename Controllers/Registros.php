<?php
class Registros extends Controllers
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        if (empty($_SESSION['login'])) {
            header('Location: ' . base_url() . "/login");
        }
        //getpermisos(3);
    }

    //Visualizacion
    public function Registros()
    {
        $data['page_tag'] = "Registros";
        $data['page_title'] = "Pagina Principal";
        $data['page_name'] = "registros";
        $data['page_js'] = "functionregistros.js";
        $this->views->getview($this, "registros", $data);
    }

    //Insert 
    //Logica update como
    public function setregistros()
    {
        if ($_POST) {
            if (empty($_POST['txtnombre']) || empty($_POST['txtapellido']) || empty($_POST['txttelefono']) ||  empty($_POST['txtci']) ||  empty($_POST['txtcorreo'])) {
                $arrresponse = array("status" => false, "msg" => 'Datos incorrectos.');
            } else {
                echo $_POST['txtnombre'];
            }
            echo json_encode($arrresponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }
}
