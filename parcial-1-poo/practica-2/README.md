# Práctica 2 - HERENCIA Y REUTILIZACIÓN DE CÓDIGO EN PHP
## Explicación de la herencia aplicada
Se creó una nueva clase llamada Admin, que esta extiende la clase Usuario,
de tal manera que Admin pueda utilizar los métodos y atributos de la clase 
que se extendio sin tener que volver a escribirlos de nuevo.
## Diferencias entre Usuario y Admin
Usuario es la clase principal que contiene los atributos nombre y correo
que cuentan con sus métodos para asignar valores y obtenerlos, mientras que 
la clase Admin hereda todo de Usuario y contiene un método llamado getRol()
que devuelve "Administrador".
## Evidencia de ejecución
Al ejecutar el programa se muestra el mensaje del constructor, el nombre y correo 
del usuario, y el rol de administrador. 
<img width="1366" height="725" alt="Captura de pantalla (3306)" src="https://github.com/user-attachments/assets/8ccaaf27-5358-4d1d-bd01-461b68769eca" />
