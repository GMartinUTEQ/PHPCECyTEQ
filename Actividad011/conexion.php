<?php

//Declaración de variables para conectar a mi base de datos.
$servidor = "localhost";  //ip privada  ipconfig = 192.168.1.116 <- Ejemplo
$usuario = "root";
$contra = "desarrollo"; /* XAMPP = "" --> MAMP = "root" */
$base = "pedidos";

//Creación de la variable $conex y se crea en $conex una nueva instancia de la clase mysqli
$conex = new mysqli($servidor, $usuario, $contra, $base);

//Valido si $conex tuvo algún error al conectarse a la base de datos.
if($conex->connect_error)
{
    //En caso de algún error, termino el programa y le mando como parámetro el error que se mo
    die("Error al conectar: " . $conex->connect_error);
}

?>