<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista de planteles de CECyTEQ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <div class="jumbotron text-center">
    <h2>Lista de planteles de CECyTEQ</h2>
</div>
  <div class="card">
    <div class="card-header">
      Planteles 
      <!-- 
       GET = Manda info a través de la URL del sitio. 
       POST = Manda la info de forma "Interna"
      -->
     
     
     
    </div>
    <div class="card-body">

    
    
    
    
    
    
    
<?php
//Declaración de variables para conectar a mi base de datos.
$servidor = "localhost";  //ip privada  ipconfig = 192.168.1.116 <- Ejemplo
$usuario = "root";
$contra = "desarrollo"; /* XAMPP = "" --> MAMP = "root" */
$base = "cecyteq2021";

//Creación de la variable $conex y se crea en $conex una nueva instancia de la clase mysqli
$conex = new mysqli($servidor, $usuario, $contra, $base);

//Valido si $conex tuvo algún error al conectarse a la base de datos.
if($conex->connect_error)
{
    //En caso de algún error, termino el programa y le mando como parámetro el error que se mo
    die("Error al conectar: " . $conex->connect_error);
}


$planteles = "select * from plantel";
$resultplantel = $conex->query($planteles);

if($resultplantel->num_rows>0)
{
    
    while($filaplantel = $resultplantel->fetch_assoc())
    {
        $idplantel = " where plantel.idplantel = " . $filaplantel["idplantel"];
        echo "<h3>Plantel: " . $filaplantel["nombreplantel"] . "</h3>";


        $cadena = "
        select 
        alumno.idalumno, alumno.nombrealumno, alumno.promedio
        , plantel.nombreplantel 
        from alumno 
        join plantel on plantel.idplantel = alumno.idplantel
        " . $idplantel;


        //Declaro la variable $resultado y le asigno lo que traiga la base de datos en la consulta que
        $resultado = $conex->query($cadena);

        //Resultado trae un conjunto de datos (Como un arreglo.)
        if($resultado->num_rows > 0)
        {
        echo  '<table class="table table-striped">
        <tr>
        <th>ID alumno</th>
        <th>Nombre del alumno</th>
        <th>Promedio</th>
        </tr>';
        //Ciclo while para recorrer el conjunto de resultados fila por fila.
        while($fila = $resultado->fetch_assoc())
        {

        //Imprimo el idplantel concateno un  - e imprimo el nombre del plantel
        echo "<tr>
            <td>" . $fila["idalumno"] . "</td>
            <td>" . $fila["nombrealumno"] . "</td>
            <td>" . $fila["promedio"] . "</td>
        </tr>";
        }
        echo "</table>";
        }
        else
        {
        //En caso contrario que la consulta no traiga ninguna fila, mostraré un mensaje.
        echo "<h3>La consulta no trajo ningún registro</h3>";
        }



    }
}



//cierro mi conexión 
$conex->close();



?>
        

       
       
       
       
       
    </div> 
    
  </div>
</div>

</body>
</html>
























