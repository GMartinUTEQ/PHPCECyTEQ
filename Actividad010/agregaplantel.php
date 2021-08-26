<?php
    if(!isset($_REQUEST["idp"]))
    {
        
        echo "<script>alert('Error, no se obtuvo ningún plantel para eliminar.');window.location.href='lstplantel.php';</script>";
        die("Error");
    }
    
    include("conexion.php");

    $cadena = "delete from plantel where idplantel = " . $_REQUEST["idp"];

    if($conex->query($cadena) === TRUE)
    {
        echo "<script>alert('Se eliminó el plantel satisfactoriamente.');window.location.href='lstplantel.php';</script>";
    } 
    else
    {
        echo "<script>alert('Oops. hubo un error al eliminar al plantel :V');window.location.href='lstplantel.php';</script>";
    }

    $conex->close();

?>