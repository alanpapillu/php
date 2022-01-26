<?php
ini_set('display error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if(!isset($_SESSION["listadoClientes"])) {
    $_SESSION["listadoClientes"] = array();
}

if ($_POST) {


    if(isset($_POST["btnAgregar"])){
        $_SESSION["listadoClientes"][] = array(
            "nombre" => $_REQUEST["txtNombre"],
            "dni" => $_REQUEST["txtDni"],
            "telefono" => $_REQUEST["txtTelefono"],
            "edad" => $_REQUEST["txtEdad"]
    )
}

    else if(isset($_POST["btnEliminar"])) {
        session_destroy();
        $_SESSION["listadoClientes"] = array();
        }
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 py-5">
                <h1>Tabla de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4 me-5 pe-5">
                <form action="" method="post">
                <div>
                    <label for="txtNombre">Usuario</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div>
                    <label for="txtDni">DNI</label>
                    <input type="number" name="txtDni" id="txtDni" class="form-control">
                </div>
                <div>
                    <label for="txtTelefono">Teléfono</label>
                    <input type="number" name="txtTelefono" id="txtTelefono" class="form-control">
                </div>
                <div>
                    <label for="txtEdad">Edad</label>
                    <input type="number" name="txtEdad" id="txtEdad" class="form-control">
                </div>
                <div class="mt-3">                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>            
                </form>
            </div>        
            <div class="col-6 ms-5 ps-5">
                <table class="table table-hover border">
                    <thead>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Teléfono</th>
                        <th>Edad</th>
                    </thead>

                </table>

            </div>
        </div>
        

        

    </div>
</body>
</html>