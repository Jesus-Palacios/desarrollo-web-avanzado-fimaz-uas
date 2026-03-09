<?php
    require_once "Usuario.php";
    //La clase extiende a la clase Usuario
    class Invitado extends Usuario {
        private $empresa;

        //Constructor
        public function __construct($nombre, $correo, $empresa){
            parent::__construct($nombre, $correo);
            $this->empresa = $empresa;
        } 

        public function getMatricula(){
            return $this->empresa;
        }
        //La función getRol devuelve "Invitado"
        public function getRol(){
            return "Invitado";
        }
    }
?>