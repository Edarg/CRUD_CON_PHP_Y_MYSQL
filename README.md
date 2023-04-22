INTRODUCCIÓN 

Este proyecto es un CRUD en PHP con conexión a MYSQL. 
El objetivo es el almacenamiento de productos en una entidad con categoria que este almacenado en la misma entidad. Para obtener una categorización en una entidad se uso una relación recursiva donde la llave foranea se relaciona con la llave primaria en la misma entidad 
___________________________________________________________________________________________________________________________________________

PASOS PARA LA INSTALACIÓN DEL PROYECTO EN UN EQUIPO LOCAL 

Se Requiere la instalación de XAMPP en un equipo Windows 10. Inicializar el Servicio MySQL en xampp Control Panel.

Ingresar al navegador y escribir localhost. Se abrirá una ventana de Xampp y en la barra de tareas abrimos phpMyAdmin.

Posteriormente se debe crear una base de datos con este nombre (crud_aceite) en phpMyAdmin. 
Luego de haber creado la base de datos se debe crear una entidad llamada (producto).
En la entidad creamos los siguientes atributos:
•	referencia 
•	categoría 
•	nombre
•	stock
al atributo referencia la definimos como llave primaria en formato entero con autoincremento, categoría la establecemos como llave foránea en formato entero, relacionando al atributo referencia.
El atributo nombre y stock las establecemos como VARCHAR.


