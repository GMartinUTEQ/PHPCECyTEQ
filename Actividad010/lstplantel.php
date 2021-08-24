<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php include("menu.php"); ?>

        <!-- Page Content Holder -->
        <div id="content">

            <?php include("header.php"); ?>
            
            <div class="jumbrotron text-center">
                <h2>Lista de planteles.</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ID Plantel</th>
                            <th>Nombre plantel</th>
                        </tr>
                        <?php
                            include("conexion.php");

                            //Declaro la variable $cadena  y le asigno la sentencia que quiero ejecutar en la bd.
                            $cadena = "select * from plantel";

                            //Declaro la variable $resultado y le asigno lo que traiga la base de datos en la consulta que
                            $resultado = $conex->query($cadena);

                            //Resultado trae un conjunto de datos (Como un arreglo.)
                            if($resultado->num_rows > 0)
                            {
                                //Ciclo while para recorrer el conjunto de resultados fila por fila.
                                while($fila = $resultado->fetch_assoc())
                                {
                                    //Imprimo el idplantel concateno un  - e imprimo el nombre del plantel
                                    echo "<tr>
                                            <td>" . $fila["idplantel"] . "</td>
                                            <td>" . $fila["nombreplantel"] . "</td>
                                        </tr>";
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
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>