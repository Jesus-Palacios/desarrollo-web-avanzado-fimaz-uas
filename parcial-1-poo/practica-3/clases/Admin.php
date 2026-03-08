<?php
    require_once "Usuario.php";
    
    //La clase Admin extiende a la clase Usuario
    class Admin extends Usuario {
        //La función getRol devuelve "Administrador"
        public function getRol(){
            return "Administrador";
        }
    }
?>