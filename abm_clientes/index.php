<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//si el archivo existe
if(file_exists("archivo.txt")){
    //leer el archivo y almacenar el contenido json en una variable
    $strJson = file_get_contents("archivo.txt");
    //convertir el json en un array aClientes
    $aClientes = json_decode($strJson, true);

} else {
    //array vacío de clientes aClientes
    $aClientes = array();
}

$id = isset($_GET["id"])? $_GET["id"] : "";

//Si es eliminar
if(isset($_GET["do"]) && $_GET["do"] == "eliminar"){

    if(file_exists("imagenes/" . $aClientes[$id]["imagen"])){
        unlink("imagenes/" . $aClientes[$id]["imagen"]);
    }
    //Elimino la posición de $aClientes[$id]
    unset($aClientes[$id]);

    //convertir el array en json
    $strJson = json_encode($aClientes);

    //actualizar el archivo con el nuevo array de clientes
    file_put_contents("archivo.txt", $strJson);

    header("Location: index.php");
}

if($_POST){

    $dni = trim($_POST["txtDni"]);
    $nombre = trim($_POST["txtNombre"]);
    $telefono = trim($_POST["txtTelefono"]);
    $correo = trim($_POST["txtCorreo"]);

    //si viene una imagen adjunta, la guardo
    if($_FILES["archivo"]["error"] === UPLOAD_ERR_OK){
        
        if(isset($aClientes[$id]["imagen"]) && $aClientes[$id]["imagen"] != ""){
            if(file_exists("imagenes/" . $aClientes[$id]["imagen"])){
                unlink("imagenes/" . $aClientes[$id]["imagen"]);
            }
        }

        $nombreAleatorio = date("Ymdhmsi");
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $nombreArchivo = $_FILES["archivo"]["name"];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        $imagen = "$nombreAleatorio.$extension";

        if($extension == "jpg" || $extension == "jpeg" || $extension == "png"){
            move_uploaded_file($archivo_tmp,"imagenes/$imagen");
        }

        
    } else {
        //sino imagen es vacío
        if($id >= 0){
            $imagen = $aClientes[$id]["imagen"];
    }   else{
            $imagen = "";
        }
    }

    //crear un array con todos los datos
    if($id >= 0){
        $aClientes[$id] = array("dni" => $dni,
                        "nombre" => $nombre,
                        "telefono" => $telefono,
                        "correo" => $correo,
                        "imagen" => $imagen);
    } else {
        $aClientes[] = array("dni" => $dni,
                        "nombre" => $nombre,
                        "telefono" => $telefono,
                        "correo" => $correo,
                        "imagen" => $imagen);
    }

    //convertir el array en json.
    $strJson = json_encode($aClientes);


    //almacenar el json en archivo.txt
    file_put_contents("archivo.txt", $strJson);
    
    
}



if ($_POST) {
    if (isset($_REQUEST['btnGuardar'])) {
        $nombre = trim($_REQUEST['txtNombre']);
        if (isset($nombre, $dni, $correo)) {

            $aMensaje = array("texto" => "¡$nombre guardado correctamente!", 
                              "estado" => "success");
        } 
    } 
}


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/13c117d460.js" crossorigin="anonymous"></script>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <?php if(isset($aMensaje)): ?>
        <div class="col-12">
            <div class="alert alert-<?php echo $aMensaje["estado"]; ?>" role="alert">
                <?php echo $aMensaje["texto"]; ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="">DNI:*</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control" required value="<?php echo isset($aClientes[$id]["dni"])? $aClientes[$id]["dni"] : ""; ?>">
                    </div>
                    <div>
                        <label for="">Nombre:*</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control" required value="<?php echo isset($aClientes[$id]["nombre"])? $aClientes[$id]["nombre"] : ""; ?>">
                    </div>
                    <div>
                        <label for="">Teléfono:</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" value="<?php echo isset($aClientes[$id]["telefono"])? $aClientes[$id]["telefono"] : ""; ?>">
                    </div>
                    <div>
                        <label for="">Correo:*</label>
                        <input type="text" name="txtCorreo" id="txtCorreo" class="form-control" required value="<?php echo isset($aClientes[$id]["correo"])? $aClientes[$id]["correo"] : ""; ?>">
                    </div>
                    <div>
                        <label for="">Archivo:</label>
                        <input type="file" name="archivo" id="archivo" accept=".jpg, .png, .jpeg">
                        <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                    </div>
                    <div>
                        <button type="submit" name="btnGuardar" class="btn btn-primary">Guardar</button>
                        <a href="index.php" class="btn btn-danger my-2">NUEVO</a>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <table class="table table-hover border">
                    <tr>
                        <th>Imagen</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                    <?php foreach($aClientes as $pos => $cliente): ?>
                        <tr>
                            <td><img src="imagenes/<?php echo $cliente["imagen"]; ?>" class="img-thumbnail"></td>
                            <td><?php echo $cliente["dni"]; ?></td>
                            <td><?php echo $cliente["nombre"]; ?></td>
                            <td><?php echo $cliente["correo"]; ?></td>
                            <td>
                                <a href="?id=<?php echo $pos; ?>"><i class="fas fa-edit"></i></a>
                                <a href="?id=<?php echo $pos; ?>&do=eliminar" name="accionEliminar"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </main>
    
</body>
</html>