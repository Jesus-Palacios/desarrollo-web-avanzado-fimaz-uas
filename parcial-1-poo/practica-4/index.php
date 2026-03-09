<?php
    require_once 'clases/Admin.php';
    require_once 'clases/Alumno.php';
    require_once 'clases/Invitado.php';

    $usuarios = [];

    try {

        $ObjAdmin01 = new Admin("Jesus Palacios", "jesuspalaciosna07@gmail.com");
        $usuarios[] = $ObjAdmin01;

        $ObjAlumno01 = new Alumno("Victor Estrada", "alexis@gmail.com", 49494);
        $usuarios[] = $ObjAlumno01;

        $ObjInvitado01 = new Invitado("Jesús Padilla", "jrpadilla@gmail.com", "Coseco");
        $usuarios[] = $ObjInvitado01;
        
        //Prueba de correo mal escrito para probar la excepción
        $ObjInvitado02 = new Invitado("Pedro Palacios", "pedro32.com", "Esma");
        $usuarios[] = $ObjInvitado02;

    } catch (Exception $e){
        echo "Error controlado: " . $e->getMessage();
    }
?>

<table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Matricula</th>
        <th>Empresa</th>
        <th>Rol</th>
    </tr>

    <?php foreach ($usuarios as $tabla) { ?>
    <tr>
        <td><?php echo $tabla->getNombre(); ?></td>
        <td><?php echo $tabla->getCorreo(); ?></td>
        <td><?php
            if ($tabla instanceof Alumno) {
                echo $tabla->getMatricula();
            } else {
                echo "Sin datos";
            } ?>
        </td> 
        <td>
            <?php if ($tabla instanceof Invitado) {
                echo $tabla->getEmpresa();
            } else {
                echo "Sin datos";
            } ?>
        </td>
        <td><?php echo $tabla->getRol(); ?></td>
    </tr>
    <?php } ?>
</table>