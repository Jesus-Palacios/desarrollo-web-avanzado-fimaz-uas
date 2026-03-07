<?php
    require_once 'Admin.php';

    //Instancia de la clase
    $ObjAdmin = new Admin();

    //Asignamos el valor de nombre y lo imprimimos
    $ObjAdmin->setNombre("Jesús Antonio Palacios Navidad");
    echo "Nombre: " . $ObjAdmin->getNombre() . "<p>"; 
    //Asignamos el valor de correo y lo imprimimos
    $ObjAdmin->setCorreo("jesuspalaciosna07@gmail.com");
    echo "Correo: " . $ObjAdmin->getCorreo() . "<p>";
    //Imprime el rol usando el método getRol
    echo "Rol: " . $ObjAdmin->getRol();
?>