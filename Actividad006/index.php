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
                    $dividendo = rand(0, 10);
                    $divisor = rand(0, 10);
                    $resultado = 0;
                    echo "<h2 class='alert alert-primary'>El dividendo es: $dividendo y el divisor es: $divisor";
                    if($divisor == 0)
                    {
                        echo "<h3 class='alert alert-danger'>Error: El divisor debe ser mayor a cero</h3>";
                    }
                    else
                    {
                        if($divisor > $dividendo)
                        {
                            echo "<h3 class='alert alert-danger'>Error: El dividendo debe ser mayor al divisor</h3>";
                        }
                        else
                        {
                            $resultado = intdiv($dividendo, $divisor);
                            $nel = "";
                            switch($resultado)
                            {
                                case 1:
                                    $nel = "UNO";
                                    break;
                                case 2:
                                    $nel = "DOS";
                                    break;
                                case 3:
                                    $nel = "TRES";
                                    break;
                                case 4:
                                    $nel = "CUATRO";
                                    break;
                                case 5:
                                    $nel = "CINCO";
                                    break;
                                case 6:
                                    $nel = "SEIS";
                                    break;
                                case 7:
                                    $nel = "SIETE";
                                    break;
                                case 8:
                                    $nel = "OCHO";
                                    break;
                                case 9:
                                    $nel = "NUEVE";
                                    break;
                                case 10:
                                    $nel = "DIEZ";
                                    break;
                                
                            }

                            echo "<h3 class='alert alert-success'>El resultado de la divisi??n es: $nel</h3>";

                            /*if($resultado == 1)
                            {
                                echo "<h3 class='alert alert-success'>El resultado de la divisi??n es: UNO</h3>";
                            }
                            elseif($resultado == 2)
                            {
                                echo "<h3 class='alert alert-success'>El resultado de la divisi??n es: DOS</h3>";
                            }
                            elseif($resultado == 3)
                            {
                                echo "<h3 class='alert alert-success'>El resultado de la divisi??n es: TRES</h3>";
                            }
                            elseif($resultado == 4)
                            {
                                echo "<h3 class='alert alert-success'>El resultado de la divisi??n es: CUATRO</h3>";
                            }
                            elseif($resultado == 5)
                            {
                                echo "<h3 class='alert alert-success'>El resultado de la divisi??n es: CINCO</h3>";
                            }
                            elseif($resultado == 6)
                            {
                                echo "<h3 class='alert alert-success'>El resultado de la divisi??n es: SEIS</h3>";
                            }
                            elseif($resultado == 7)
                            {
                                echo "<h3 class='alert alert-success'>El resultado de la divisi??n es: SIETE</h3>";
                            }
                            elseif($resultado == 8)
                            {
                                echo "<h3 class='alert alert-success'>El resultado de la divisi??n es: OCHO</h3>";
                            }
                            elseif($resultado == 9)
                            {
                                echo "<h3  class='alert alert-success'>El resultado de la divisi??n es: NUEVE</h3>";
                            }
                            else
                            {
                                echo "<h3 class='alert alert-success'>El resultado de la divisi??n es: DIEZ</h3>";
                            }*/
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
                    echo "<h1>El n??mero inc??gnita es: $incognita</h1>";
                    //echo "<h1>El n??mero inc??gnita es: " . $incognita . "</h1>";
                    if($incognita < 10)
                    {
                        echo "<h1>El n??mero es de 1 d??gito</h1>";
                    }
                    elseif($incognita >= 10 && $incognita < 100)
                    {
                        echo "<h1>El n??mero es de 2 d??gitos</h1>";
                    }
                    elseif($incognita >= 100 && $incognita < 1000)
                    {
                        echo "<h1>El n??mero es de 3 d??gitos</h1>";
                    }
                    else
                    {
                        echo "<h1>El n??mero es de 4 d??gitos</h1>";
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
                    echo "El d??a de hoy es: " . $dia . "<br/>";
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
                        echo "<h1>El n??mero es medio, es 10</h1>";
                    }
                    else
                    {
                        if($sorteado < 10)
                        {
                            echo "<h1>El n??mero es inferior, es $sorteado</h1>";
                        }
                        else
                        {
                            echo "<h1>El n??mero es superior, es " . $sorteado ."</h1>";
                        }
                    }
                ?>
            </div>
            <div class="card-footer">Desarrollado por: GMartin</div>
          </div>
    </body>
</html>