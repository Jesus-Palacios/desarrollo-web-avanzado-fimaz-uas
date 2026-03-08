<?php
    class Usuario {
        //Atributos privados
        private $nombre;
        private $correo;
        
        //Constructor, imprime solo el mensaje: "Mi clase se ha inicializado".
        function __construct(){
            echo "Mi clase se ha inicializado ! <p>";
        }

        //Getter nombre
        public function getNombre(){
            return $this->nombre;
        }

        //Getter correo
        public function getCorreo(){
            return $this->correo;
        }

        //Setter nombre
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        //Setter para validar el correo
        public function setCorreo($correo){
            if (filter_var($correo, FILTER_VALIDATE_EMAIL)){
                $this->correo = $correo;
            } else {
                throw new Exception("Correo inválido");
            }
            
        }
    }
?>