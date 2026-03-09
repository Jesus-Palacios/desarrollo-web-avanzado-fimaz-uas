<?php
    require_once 'clases/Admin.php';
    require_once 'clases/Alumno.php';
    
    //Instancia de la clase
    $ObjAdmin01 = new Admin();
    
    //Asignamos el valor de nombre y lo imprimimos
    $ObjAdmin01->setNombre("Jesús Palacios");
    echo "Nombre: " . $ObjAdmin01->getNombre() . "<br>";
    //Se valida el correo
    try {
        $ObjAdmin01->setCorreo("Jesuspalacios");
        echo "Correo: " . $ObjAdmin01->getCorreo() . "<br>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br>";
    }
    //Imprimimos el rol
    echo "Rol: " . $ObjAdmin01->getRol() . "<p>";


    //Instancia de la clase
    $ObjAlumno01 = new Alumno();

    //Asignamos el valor de nombre y lo imprimimos
    $ObjAlumno01->setNombre("Jesus Zatarain");
    echo "Nombre: " . $ObjAlumno01->getNombre() . "<br>";
    //Asignamos el valor de la matricula y lo imprimimos
    $ObjAlumno01->setMatricula(208378);
    echo "Matricula: " . $ObjAlumno01->getMatricula() . "<br>";
    try {
        $ObjAlumno01->setCorreo("jesuszata@gmail.com");
        echo "Correo: " . $ObjAlumno01->getCorreo() . "<br>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br>";
    }
    echo "Rol: " . $ObjAlumno01->getRol() . "<br>";
?>