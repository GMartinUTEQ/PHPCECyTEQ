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
                    $dividendo = rand(1, 10);
                    $divisor = rand(1, 10);
                    $resultado = 0;
                    echo "<h2>El dividendo es: $dividendo y el divisor es: $divisor";
                    if($divisor == 0)
                    {
                        echo "<h3>Error: El divisor debe ser mayor a cero</h3>";
                    }
                    else
                    {
                        if($divisor > $dividendo)
                        {
                            echo "<h3>Error: El dividendo debe ser mayor al divisor</h3>";
                        }
                        else
                        {
                            $resultado = intdiv($dividendo, $divisor);
                            if($resultado == 1)
                            {
                                echo "<h3>El resultado de la división es: UNO</h3>";
                            }
                            elseif($resultado == 2)
                            {
                                echo "<h3>El resultado de la división es: DOS</h3>";
                            }
                            elseif($resultado == 3)
                            {
                                echo "<h3>El resultado de la división es: TRES</h3>";
                            }
                            elseif($resultado == 4)
                            {
                                echo "<h3>El resultado de la división es: CUATRO</h3>";
                            }
                            elseif($resultado == 5)
                            {
                                echo "<h3>El resultado de la división es: CINCO</h3>";
                            }
                            elseif($resultado == 6)
                            {
                                echo "<h3>El resultado de la división es: SEIS</h3>";
                            }
                            elseif($resultado == 7)
                            {
                                echo "<h3>El resultado de la división es: SIETE</h3>";
                            }
                            elseif($resultado == 8)
                            {
                                echo "<h3>El resultado de la división es: OCHO</h3>";
                            }
                            elseif($resultado == 9)
                            {
                                echo "<h3>El resultado de la división es: NUEVE</h3>";
                            }
                            else
                            {
                                echo "<h3>El resultado de la división es: DIEZ</h3>";
                            }
                        }
                    }

                    
                ?>
            </div>
            <div class="card-footer">Desarrollado por: GMartin</div>
        </div>
        <br/>

        <div class="card">
            <div class="card-header">Ejemplo:</div>
            <div class="card-body">
                <?php

                    $incognita = rand(1, 9999);
                    echo "<h1>El número incógnita es: $incognita</h1>";
                    //echo "<h1>El número incógnita es: " . $incognita . "</h1>";
                    if($incognita < 10)
                    {
                        echo "<h1>El número es de 1 dígito</h1>";
                    }
                    elseif($incognita >= 10 && $incognita < 100)
                    {
                        echo "<h1>El número es de 2 dígitos</h1>";
                    }
                    elseif($incognita >= 100 && $incognita < 1000)
                    {
                        echo "<h1>El número es de 3 dígitos</h1>";
                    }
                    else
                    {
                        echo "<h1>El número es de 4 dígitos</h1>";
                    }

                   
                ?>
            </div>
            <div class="card-footer">Desarrollado por: GMartin</div>
        </div>
        <br/>
    
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