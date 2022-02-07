<?php
ini_set('display error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aInvitados = array("pepe","ana","juan","maria");



?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de invitados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-3">
                <h1>Listado de ingreso</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-2">
                <h5>Complete el siguiente formulario:</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-3">
                <form action="" method="post">
                    <div>
                    <label for="txtNombre" class="py-2">Ingrese el DNI:</label><br>
                    <input type="text" name="txtNombre" id="txtNombre"><br>
                    <a href="http://"><button class="btn btn-primary my-2">Verificar invitado</button></a>
                    </div>
                    <div>
                    <label for="txtCodigo" class="py-2">Ingrese el código secreto para el pase VIP:</label><br>
                    <input type="text" name="txtCodigo" id="txtCodigo"><br>
                    <a href="http://"><button class="btn btn-primary my-2">Verificar Código</button></a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>