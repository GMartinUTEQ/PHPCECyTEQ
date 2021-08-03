<html>
    <head>
        <title>Variables PHP</title>
        <meta charset="utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Uso de variables en PHP</h1>
            <p>Como trabajar con diferentes tipos de variables.</p>
        </div>

    
        <div class="card">
            <div class="card-header">Ejemplo:</div>
            <div class="card-body">
                <?php
                    $dia = 24; //Variable de tipo entero.
                    $salario = 700.50; //Variable tipo decimal.
                    $nombre = "Heidy"; //Variable de tipo string.
                    $activo = true; //Variable de tipo Booleano.
                    echo "El día de hoy es: " . $dia . "<br/>";
                    echo "<hr/>"; //Horizontal Rule
                    echo "Tu nombre es: " . $nombre . "<br/>";
                    echo "Tu salario es: $" . money_format("%(#10n", $salario) . "<br/>";
                    echo "Eres un empleado activo: " . $activo;
                ?>
            </div>
            <div class="card-footer">Desarrollado por: GMartin</div>
          </div>
            <br/>
          <div class="card">
            <div class="card-header">Juego: Adivina Inferior, superior o medio.<a href="index.php">Recargar</a></div>
            <div class="card-body">
                <?php
                    $sorteado = rand(1 ,20);
                    if($sorteado == 10)
                    {
                        echo "<h1>El número es medio, es 10</h1>";
                    }
                    else
                    {
                        if($sorteado < 10)
                        {
                            echo "<h1>El número es inferior, es $sorteado</h1>";
                        }
                        else
                        {
                            echo "<h1>El número es superior, es " . $sorteado ."</h1>";
                        }
                    }
                ?>
            </div>
            <div class="card-footer">Desarrollado por: GMartin</div>
          </div>
    </body>
</html>