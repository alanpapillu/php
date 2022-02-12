<?php

ini_set('display error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Cliente {
    private $dni;
    private $nombre;
    private $correo;
    private $telefono;
    private $descuento;

    public function __construct(){
        $this->descuento = 0.0;
    }

    public function __get($propiedad){
        return $this->propiedad;
    }

    public function __set($propiedad, $valor){
        $this->propiedad = $valor;
    }

    public function imprimir(){
        echo "Cliente: " . $this->nombre . "<br>";
        echo "Documento: " . $this->dni . "<br>";
        echo "Correo: " . $this->correo . "<br>";
        echo "Teléfono " . $this->telefono . "<br>";
        echo "Descuento " . $this->descuento . "<br>";
    }

} 
class Producto{
    private $cod;
    private $nombre;
    private $precio;
    private $descripcion;
    private $iva;

    public function __construct(){
        $this->precio = 0.0;
        $this->iva = 0.0;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function imprimir(){
        echo "Producto: " . $this->nombre . "<br>";
        echo "Código: " . $this->cod . "<br>";
        echo "Precio: " . $this->precio . "<br>";
        echo "Descripción " . $this->descripcion . "<br>";
        echo "IVA " . $this->iva . "<br>";
    }

}

class Carrito{

}

//programa
$cliente1 = new Cliente();
$cliente1->dni = "34758595";
$cliente1->nombre = "Bernabé";
$cliente1->correo = "bernabe@gmail.com";
$cliente1->telefono = "+541185856963";
$cliente1->descuento = 0.05;

$producto1 = new Producto();
$producto1->cod = ""
$producto1->nombre = "Notebook 15 HP"
$producto1->descripcion = "Esta es una computadora HP";
$producto1->precio = 30800;
$producto1->iva = 21;
$producto1->imprimir();


$cliente1->imprimir();


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">


                </table>

            </div>

        </div>

    </main>
    
</body>
</html>