<?php
ini_set('display error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function calcularNeto($bruto){
    
    return $bruto - ($bruto * 0.17);
}

echo "el sueldo neto es " . calcularNeto(50000);


?>