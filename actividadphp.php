<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Lista de precios</h1>
            
                <table class="table border table-hover">
                    <thead>
                            <th colspan="2"><strong>nombre</strong></th>
                            <th><strong>marca</strong> </th>
                            <th><strong>modelo</strong> </th>
                            <th><strong>stock</strong> </th>
                            <th><strong>precio</strong> </th>
                            <th><strong>acción</strong> </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">Smart TV 55"</td>
                            <td>Hitachi</td>
                            <td>555csd56</td>
                            <td>Hay Stock</td>
                            <td>$58.000</td>
                            <td><a href=""></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        

    </main>
</body>
</html>



<?php

$valor = rand(1,5);

if ($valor == 1 || $valor == 3 || $valor == 5){
    echo "El número $valor Impar";
}

else{
    echo "El número $valor es Par";
}
