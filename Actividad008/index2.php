<!DOCTYPE html>
<html lang="en">
<head>
  <title>Uso de tablas HTML</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
    <div class="jumbotron text-center">
        <h2>Ejemplo de tablas en HTML</h2>
    </div>
    <div class="card">
        <div class="card-header text-center">Este es un ejemplo de una tabla de un arreglo asociativo y funciones</div>
            <div class="card-body">
            
                <?php

                    function armaTabla($marcas)
                    {
                        $html = '<table class="table table-striped table-hover">
                                <!-- tr = Table Row -->
                                <tr class="table-info text-center">
                                    <!-- th = Table Header -->
                                    <th>
                                        Marcas de autos
                                    </th>
                                    <th>
                                        Origen
                                    </th>
                                </tr>';

                                foreach($marcas as $marca)
                                {
                                    $html.= '
                                            <tr>
                                                <td>' . $marca['Marca'] . '</td>
                                                <td>' . $marca['Origen'] . '</td>
                                            </tr>
                                        ';
                                }

                                $html.= "</table>";
                                return $html;
                    } 

                    $marcas = [
                                [
                                    'Marca' => 'Mazda',
                                    'Origen' => 'Japón',
                                ],
                                [
                                    'Marca' => 'Audi',
                                    'Origen' => 'Alemania',
                                ],
                                [
                                    'Marca' => 'Honda',
                                    'Origen' => 'Japón',
                                ],
                                [
                                    'Marca' => 'Nissan',
                                    'Origen' => 'Japón',
                                ],
                                [
                                    'Marca' => 'VUHL',
                                    'Origen' => 'México'
                                ]
                            ];
                    $htmlrecibido = armaTabla($marcas);
                    echo $htmlrecibido;
                    
                ?>
            
        </div> 
    </div>
    
</div>

</body>
</html>
