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
    <div class="card-header">Este es un ejemplo de una tabla</div>
    <div class="card-body">
    <table class="table table-striped table-hover">
            <!-- tr = Table Row -->
            <tr class="table-info">
                <!-- th = Table Header -->
                <th>
                    Nombre
                </th>
                <th>
                    Semestre
                </th>
                <th>
                    Promedio
                </th>
            </tr>
            <tr>
                <!-- td = Table Data -->
                <td>
                    Juanito
                </td>
                <td>
                    2do
                </td>
                <td>
                    6.0
                </td>
            </tr>
            <tr>
                <td>
                    Conchita
                </td>
                <td>
                    2do
                </td>
                <td>
                    9.5
                </td>
            </tr>
            
        </table>
    </div> 
        
    </div>
</div>

</body>
</html>
