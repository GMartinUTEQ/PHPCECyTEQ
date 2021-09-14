<?php

if(!isset($_REQUEST["correo"]) && !isset($_REQUEST["pass"]))
{
    echo "<script>alert('Lo siento, usuario o contraseña incorrectos');
                  window.location.href='index.php';
          </script>";
}

include("conexion.php");

$cadena = "select * from usuario where correo = '" . $_REQUEST["correo"] . "' and pass = '" . md5($_REQUEST["pass"]) . "'"; 
echo $cadena;
$resultado = $conex->query($cadena);

if($resultado->num_rows > 0 )
{
    while($fila = $resultado->fetch_assoc())
    {
        if($fila["rol"] == 1)
        {
            echo "<script>alert('Lo siento, tu usuario es de administrador no de cliente');
                  window.location.href='index.php';
          </script>";
        }
        $_SESSION["correo"] = $fila["correo"];
        echo "<script>window.location.href='catalogo.php';</script>";
    }
}
else
{
    echo "<script>alert('Lo siento, usuario o contraseña incorrectos');
            window.location.href='index.php';
        </script>";
}

$conex->close();

?>