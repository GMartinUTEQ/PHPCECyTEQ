<?php
//Declaración de variables para conectar a mi base de datos.
$servidor = "localhost";  //ip privada  ipconfig = 192.168.1.116 <- Ejemplo
$usuario = "root";
$contra = ""; /* XAMPP = "" --> MAMP = "root" */
$base = "cecyteq2021";

//Creación de la variable $conex y se crea en $conex una nueva instancia de la clase mysqli
$conex = new mysqli($servidor, $usuario, $contra, $base);

//Valido si $conex tuvo algún error al conectarse a la base de datos.
if($conex->connect_error)
{
    //En caso de algún error, termino el programa y le mando como parámetro el error que se mostrará
    die("Error al conectar: " . $conex->connect_error);
}

//Declaro la variable $cadena  y le asigno la sentencia que quiero ejecutar en la bd.
$cadena = "select * from plantel";

//Declaro la variable $resultado y le asigno lo que traiga la base de datos en la consulta que mandé.
$resultado = $conex->query($cadena);

//Resultado trae un conjunto de datos (Como un arreglo.)
if($resultado->num_rows > 0)
{
    //Ciclo while para recorrer el conjunto de resultados fila por fila.
    while($fila = $resultado->fetch_assoc())
    {
        //Imprimo el idplantel concateno un  - e imprimo el nombre del plantel
        echo $row["idplantel"] . " - " . $row["nombreplantel"] . "<br/>";
    }
}
else
{
    //En caso contrario que la consulta no traiga ninguna fila, mostraré un mensaje.
    echo "<h3>La consulta no trajo ningún registro</h3>";
}
//cierro mi conexión 
$conex->close();



?>