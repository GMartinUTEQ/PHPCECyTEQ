<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Plantel</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <?php

        $idplantel = "0";
        $nombreplantel = "";
        $telplantel = "";
        $direccionplantel = "";
        $btnguardar = "Guardar";
        if(isset($_GET["idp"]))
        {
            $idplantel = $_REQUEST["idp"];
            

        }

    ?>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php include("menu.php"); ?>

        <!-- Page Content Holder -->
        <div id="content">

            <?php include("header.php"); ?>
            
            <div class="card">
                <div class="card card-header">
                    <h3>Alta de plantel</h3>
                </div>
                <div class="card card-body">
                    <form action="agregaplantel.php" method="post">  
                        <div class="form-group">
                            <label for="idplantel">Clave plantel:</label>
                            <input class="form-control" type="text" id="idplantel" name="idplantel" readonly value="0"/>
                        </div>
                        <div class="form-group">
                            <label for="nombreplantel">Nombre plantel:</label>
                            <input class="form-control" required type="text" id="nombreplantel" name="nombreplantel" />
                        </div>
                        <div class="form-group">
                            <label for="telplantel">Teléfono Plantel:</label>
                            <input class="form-control" required type="text" id="telplantel" name="telplantel" placeholder="Ej. +52 4423 253 333" />
                        </div>
                        <div class="form-group">
                            <label for="dirplantel">Dirección Plantel:</label>
                            <input class="form-control" required type="text" id="dirplantel" name="dirplantel" placeholder="Incluir calle y número" />
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Guardar" class="btn btn-primary" >
                        </div>
                    </form>
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