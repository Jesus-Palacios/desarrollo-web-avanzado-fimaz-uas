<?php
    require_once "Usuario.php";
    class Alumno extends Usuario{
        private $matricula;

        //Getter matricula
        public function getMatricula(){
            return $this->matricula;
        }

        //Setter matricula
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        //La función getRol devuelve "Alumno"
        public function getRol(){
            return "Alumno";
        }
    }
?>