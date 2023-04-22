INTRODUCCIÓN 

Este proyecto es un CRUD en PHP con conexión a MYSQL. 
El objetivo es el almacenamiento de productos en una entidad con categoria que este almacenado en la misma entidad. Para obtener una categorización en una entidad se uso una relación recursiva donde la llave foranea se relaciona con la llave primaria en la misma entidad 
___________________________________________________________________________________________________________________________________________

PASOS PARA LA INSTALACIÓN DEL PROYECTO EN UN EQUIPO LOCAL 

PRIMER PASO
Se Requiere la instalación de XAMPP en un equipo Windows 10. Inicializar el Servicio MySQL en xampp Control Panel.

Ingresar al navegador y escribir localhost. Se abrirá una ventana de Xampp y en la barra de tareas abrimos phpMyAdmin.

Posteriormente se debe crear una base de datos con este nombre (crud_aceite) en phpMyAdmin. 
Luego de haber creado la base de datos se debe crear una entidad llamada (producto).
En la entidad creamos los siguientes atributos:
 •	referencia 
 •	categoría 
 •	nombre
 •	stock
 
Al atributo referencia la definimos como llave primaria en formato entero con autoincremento, categoría la establecemos como llave foránea en formato entero, relacionando al atributo referencia.
El atributo nombre y stock las establecemos como VARCHAR.

___________________________________________________________________________________________________________________________________________

SEGUNDO PASO 

Procedemos entrar la carpeta donde se realizo la instalación de Xampp, ingresamos a htdocs y dentro de htdocs procedemos a crear una carpeta para almacenar el proyecto.

para obtener el proyecto en nuestro equipo local, se debe ingresar al CMD y ejecutar el siguiente comando.

cd C:\xampp\htdocs\carpeta_creada 
C:\xampp\htdocs\carpeta_creada> git clone https://github.com/Edarg/CRUD_CON_PHP_Y_MYSQL/tree/main/CRUD_PHP_MYSQL

Esta es la forma para obtener el proyecto de GitHub, se puede consultar este link para obtener mas información de como obtener el proyecto en nuestro equipo local 
https://gist.github.com/Nando98/2cd5fc89cb7cfbe9b5fba56220d05307

__________________________________________________________________________________________________________________________________________

En el navegador procedemos a escribir lo siguiente: 
http://localhost/carpeta_creada /
Esta manera el proyecto se ejecutar en el navegador 

_______________________________________________________________________________________________________________________________________


