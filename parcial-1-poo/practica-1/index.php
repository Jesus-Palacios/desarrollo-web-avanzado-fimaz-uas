<?php
    require_once 'Usuario.php';
    //Instancia de la clase
    $ObjUsuario = new Usuario();

    //Asignamos el valor de nombre y lo imprimimos
    $ObjUsuario->setNombre("Jesús Antonio Palacios Navidad");
    echo "Nombre: " . $ObjUsuario->getNombre() . "<p>"; 
    //Asignamos el valor de correo y lo imprimimos
    $ObjUsuario->setCorreo("jesuspalaciosna07@gmail.com");
    echo "Correo: " . $ObjUsuario->getCorreo() . "<p>";
?>