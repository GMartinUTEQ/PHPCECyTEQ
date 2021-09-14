<?php
    if(!isset($_REQUEST["nombreplantel"]) || !isset($_REQUEST["telplantel"]) || !isset($_REQUEST["dirplantel"]))
    {
        
        echo "<script>alert('Error, no se obtuvo información del plantel.');window.location.href='lstplantel.php';</script>";
        die("Error");
    }
    
    include("conexion.php");

    $cadena = "insert into plantel values(0, '" . $_REQUEST["nombreplantel"] . "', '" . $_REQUEST["telplantel"] . "', '" . $_REQUEST["dirplantel"] . "');";

    if($conex->query($cadena) === TRUE)
    {
        echo "<script>alert('Se agregó el plantel satisfactoriamente.');window.location.href='lstplantel.php';</script>";
    } 
    else
    {
        echo "<script>alert('Oops. hubo un error al crear al plantel :V');window.location.href='lstplantel.php';</script>";
    }

    $conex->close();

?>