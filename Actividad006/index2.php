<html>
    <head>
        <title>Estructuras Repetitivas</title>
        <meta charset="utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Estructuras Repetitivas</h1>
            <p>Como trabajar con diferentes estructuras repetitivas.</p>
        </div>

        <div class="card">
            <div class="card-header">Ciclo For...</div>
            <div class="card-body">
                <h3>Ejercicio que imprime todos los números del 1 al 100.</h3>
                <?php
                    for($i = 1; $i <= 100; $i++)
                    {
                        echo "$i - ";
                    }
                ?>
            </div>
            <div class="card-footer">Desarrollado por: GMartin</div>
        </div>
        <br/>
        <div class="card">
            <div class="card-header">Ciclo While... (Do)</div>
            <div class="card-body">
                <?php
                    $aleatorio = rand(1, 100);
                    echo "<h3>Ejercicio que imprime todos los números del 1 al $aleatorio.</h3>";
                    $incremental = 1;
                    while($incremental <= $aleatorio)
                    {
                        echo "$incremental - ";
                        $incremental ++;
                    }
                
                ?>
            </div>
            <div class="card-footer">Desarrollado por: GMartin</div>
        </div>
        <br/>
        <div class="card">
            <div class="card-header">Ciclo Do While...</div>
            <div class="card-body">
            </div>
            <div class="card-footer">Desarrollado por: GMartin</div>
        </div>
        <br/>


    </body>
</html>