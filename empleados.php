<?php

$aEmpleados = array();

$aEmpleados[]= array("DNI" => 33300123, "Nombre" => "David García", "bruto" => 85000.30);
$aEmpleados[]= array("DNI" => 33300123, "Nombre" => "David García", "bruto" => 85000.30);
$aEmpleados[]= array("DNI" => 33300123, "Nombre" => "David García", "bruto" => 85000.30);
$aEmpleados[]= array("DNI" => 33300123, "Nombre" => "David García", "bruto" => 85000.30);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de empleados</h1>
            </div>
            </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th colspan="2">Nombre</th>
                        <th>Sueldo</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </table>
                <h3>Cantidad de empleados activos: </h3>

            </div>
        </div>

    </main>
</body>
</html>