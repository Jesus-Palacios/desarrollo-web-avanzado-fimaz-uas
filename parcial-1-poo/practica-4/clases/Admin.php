<?php
    require_once "Usuario.php";
    //La clase extiende a la clase Usuario
    class Admin extends Usuario {
        //La función getRol devuelve "Administrador"
        public function getRol(){
            return "Administrador";
        }
    }
?>