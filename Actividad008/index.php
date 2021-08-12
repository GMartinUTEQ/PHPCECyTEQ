<html>

    <body>
        <?php

            function mostrartitulo($titulo)
            {
                //echo "<h1>$titulo</h1>";
                echo "<h1>" . $titulo . "</h1>";
            }

            mostrartitulo("Este es el título");
            echo "<br>";
        ?>
        <p>El título fue creado con una función</p>
        <br/>

    
        <?php

            function mostrartituloprom($titulo)
            {
                //echo "<h1>$titulo</h1>";
                echo "<h1>" . $titulo . "</h1>";
            }
            function promedio($val1, $val2, $val3)
            {
                $prom = ($val1 + $val2 + $val3) / 3;
                echo "El promedio de $val1, $val2 y $val3 es: $prom";
            }

            mostrartituloprom("Ejemplo de función que recibe parámetros");
            promedio(7, 8, 10);


        ?>

        <br/>

        <?php

            
            function suma($val1, $val2)
            {
                $suma = $val1 + $val2;
                return $suma;
            }

            mostrartitulo("Funcion que retorna un dato");
            $valor1 = 12;
            $valor2 = 23;
            $suma = suma($valor1, $valor2);
            echo "El valor de la suma de $valor1 y $valor2 = $suma";
        ?>

        <br>

        <?php

            function operacion($val1, $val2, &$suma, &$resta, &$multiplicacion, &$division)
            {
                $suma = $val1 + $val2;
                $resta = $val1 - $val2;
                $multiplicacion = $val1 * $val2;
                $division = $val1 / $val2;
            }

            $valor1 = 7;
            $valor2 = 3;
            mostrartitulo("Funcion que no retorna nada de forma nativa");
            operacion($valor1, $valor2, $suma, $resta, $multiplicacion, $division);
            echo "La suma de $valor1 + $valor2 = $suma";
            echo "<br>La resta de $valor1 - $valor2 = $resta";
            echo "<br>La multiplicación de $valor1 * $valor2 = $multiplicacion";
            echo "<br>La división de $valor1 / $valor2 = $division";
        
        ?>
        <br/>
        <?php

            function operacionarr($valores)
            {
                $suma = $valores[0] + $valores[1];
                $resta = $valores[0] - $valores[1];
                $respuesta = array($suma, $resta);
                return $respuesta;
            }
            mostrartitulo("Funciones con arreglos");
            $valores = array(8, 2);
            $resp = operacionarr($valores);
            echo "El resultado de la suma es:" . $resp[0];
            echo "<br/>El resultado de la resta es:" . $resp[1];


        ?>
    </body>
</html>