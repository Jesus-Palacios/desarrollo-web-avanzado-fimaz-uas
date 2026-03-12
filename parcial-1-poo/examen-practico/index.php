<?php
    require_once "Usuario.php";
    require_once "Admin.php";
    require_once "Alumno.php";

    $Usuarios = [];

    try {
        $ObjAdminValido = new Admin("Jesús Palacios", "jesuspalaciosna07@gmail.com");
        $Usuarios[] = $ObjAdminValido;

        $ObjAlumnoValido = new Alumno("Diana Tirado" , "dianaosu9@gmail.com", 201039);
        $Usuarios[] = $ObjAlumnoValido;

        //Alumno con un correo invalido para probar el sistema de validación de correos.
        $ObjAlumnoInvalido = new Alumno("Dana Lomas", "lomaseigmail.com", 20847728);
        $Usuarios[] = $ObjAlumnoInvalido;

    } catch (Exception $e) {
        echo "Controlado: " . $e->getMessage();
    }
?>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Rol</th>
        <th>Matricula</th> 
    </tr>
    <?php foreach ($Usuarios as $U) {?>
    <tr>
        <td><?php echo $U->getNombre(); ?></td>
        <td><?php echo $U->getCorreo(); ?></td>
        <td><?php echo $U->getRol(); ?></td>
        <td>
            <?php
                if ($U instanceof Alumno) {
                    echo $U->getMatricula();
                } else {
                    echo "———";
                }
            ?>
        </td>
    </tr>
    <?php }?>
</table>