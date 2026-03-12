# EXAMEN PRÁCTICO – PARCIAL 1 (POO en PHP) 
Se creó una clase base la cual fue Usuario, que esta cuenta con dos atributos,
nombre y correo, además que tiene una validación de correo. También se crearon
otras dos clases que heredan a la clase base, las cuales son Admin y Alumno,
cuentan con un método getRol, que imprime el rol y Alumno cuenta con otro
atributo, matrícula que solo se muestra si es alumno.

En el archivo index.php se crearon tres objetos: dos con correos válidos y uno 
inválido para probar la validación. Los usuarios con correo válido se guardan en 
un arreglo y después se muestran en una tabla con su nombre, correo, rol y 
matrícula si el usuario es alumno, además que si el correo es inválido muestra
un mensaje arriba que dice "Controlado : Correo inválido" en caso del que correo
no sea válido.