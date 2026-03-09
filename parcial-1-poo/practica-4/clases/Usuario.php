<?php
    //Clase base
    class Usuario {
        protected $nombre;
        protected $correo;

        //Constructor
        public function __construct($nombre, $correo) {
            $this->nombre = $nombre;
            $this->correo = $correo;

            //Validar correo
            if (filter_var($correo, FILTER_VALIDATE_EMAIL)){
                $this->correo = $correo;
            } else {
                throw new Exception("Correo inválido: <b>No cumple con el formato correcto</b>" . "<p>");
            }
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getCorreo(){
            return $this->correo;
        }
    }
?>