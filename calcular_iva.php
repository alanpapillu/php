<?php
ini_set('display error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva = 0;
$resPrecioSinIva = 0;
$resPrecioConIva = 0;
$resIvaCantidad = 0;

if($_POST){

    $iva = $_REQUEST["lstIva"];
    $precioSinIva = $_REQUEST["txtImporteSinIva"];
    $precioConIva = $_REQUEST["txtImporteConIva"];

    
    
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
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <?php if(isset($mensaje) && $mensaje != ""){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje; ?>
                    </div>
                    <?php } ?>
                <form action="" method="post">
                <div>
                    <label for="txtUsuario">Usuario</label>
                    <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                </div>
                <div>
                    <label for="txtClave">Contraseña</label>
                    <input type="password" name="txtClave" id="txtClave" class="form-control">
                </div>
                <div class="mt-3">                    
                    <a href="../acceso_confirmado.php"><button type="submit" class="btn btn-primary">Enviar</button></a>
                </div>            
                </form>
            </div>
        </div>
        <?php if (isset($mensaje)){ ?>
            <div class="row">
                <div class="col-12">
                    <?php echo $mensaje; ?>
                </div>
            </div>
            <?php } ?>

        

    </div>
</body>
</html>