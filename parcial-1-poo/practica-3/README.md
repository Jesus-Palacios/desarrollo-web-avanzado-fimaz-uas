# PRÁCTICA DE LABORATORIO 3: SISTEMA DEUSUARIOS CON VALIDACIONES Y EXCEPCIONES
## Descripción del sistema
Se creó una clase Usuario para validar los correos de los usuarios, también muestra en 
pantalla el nombre y rol, ademas en el apartado del correo si esta correcto lo muestra, 
pero si no lo esta manda un mensaje de error.
## Explicación del flujo de clases
Se creó la clase base Usuario, después las clases Admin y Alumno que heredan los métodos y
atributos de la clase anterior, estas dos anteriores tienen dentro los métodos getRol(), que 
devuelven los roles asignado, sin embargo la clase Alumno tiene el atributo matricula, 
que asignar y mostrar.
## Evidencia del manejo de errores
En la clase Usuario se valida que el correo tenga un formato correcto. Si el correo no es 
válido, se lanza una excepción con el mensaje "Correo inválido". Este error se maneja en 
index.php usando try/catch.
<img width="1366" height="725" alt="Captura de pantalla (3310)" src="https://github.com/user-attachments/assets/01f63666-d2ad-4ce1-bd1d-d7df336a88f2" />
