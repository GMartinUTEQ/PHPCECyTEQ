<?php
    if(!isset($_REQUEST["nombreplantel"]) || !isset($_REQUEST["telplantel"]) || !isset($_REQUEST["dirplantel"]))
    {
        
        echo "<script>alert('Error, no se obtuvo información del plantel.');window.location.href='lstplantel.php';</script>";
        die("Error");
    }
    
    include("conexion.php");

    $cadena = "update plantel set nombreplantel = '" . $_REQUEST["nombreplantel"] . "', telefonoplantel = '" . $_REQUEST["telplantel"] . "', direccionplantel = '" . $_REQUEST["dirplantel"] . "' where idplantel = " . $_REQUEST["idplantel"];
    
    if($conex->query($cadena) === TRUE)
    {
        echo "<script>alert('Se modificó el plantel satisfactoriamente.');window.location.href='lstplantel.php';</script>";
    } 
    else
    {
        echo "<script>alert('Oops. hubo un error al modificar al plantel :V');window.location.href='lstplantel.php';</script>";
    }

    $conex->close();

?>