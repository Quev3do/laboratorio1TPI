<?php

namespace app\controller;

class InicioController{

    public function index(){
        return $this->view('InicioView');
    }

    public function view($vista){
        //require_once("../app/views/HomeView.php");
        //extract($data);
        if(file_exists("../app/views/$vista.php")){
            ob_start();
            include "../app/views/$vista.php";
            $content = ob_get_clean();
            return $content;
        }
        else{
            echo "vista no encotrada ../app/views/$vista.php";
        }
        return "Inicio Controller";
    }
}
?>