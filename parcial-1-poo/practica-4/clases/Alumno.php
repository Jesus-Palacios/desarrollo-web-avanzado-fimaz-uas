<?php
    require_once "Usuario.php";
    //La clase extiende a la clase Usuario
    class Alumno extends Usuario {
        private $matricula;
        
        //Constructor
        public function __construct($nombre, $correo, $matricula){
            parent::__construct($nombre, $correo);
            $this->matricula = $matricula;
        } 

        public function getMatricula(){
            return $this->matricula;
        }
        //La función getRol devuelve "Alumno"
        public function getRol(){
            return "Alumno";
        }
    }
?>