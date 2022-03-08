<?php

    include_once("config.php");
    include_once("entidades/tipoproducto.php");
    include_once("entidades/producto.php");

    $tipoProducto = new TipoProducto();
    $aTipoProductos = $tipoProducto->obtenerTodos();





    include_once("header.php");

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Productos</h1>
          <div class="row">
                <div class="col-12 mb-3">
                    <a href="tipoproducto-listado.php" class="btn btn-primary mr-2">Listado</a>
                    <a href="tipoproducto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
                    <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                    <button type="submit" class="btn btn-danger mr-2" id="btnBorrar" name="btnBorrar">Borrar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" required="" class="form-control" name="txtNombre" id="txtNombre" value="<?php echo $tipoProducto->nombre; ?> "> 
                </div>
                <div class="col-6 form-group">
                    <label for="txtNombre">Tipo de producto:</label>
                    <select class="form-control" name="txtTipoProducto" id="txtTipoProducto">
                        <?php foreach ($aTipoProductos as $tipoProducto) : ?>
                        <option value="<?php echo $tipoProducto->$idtipoproducto ?>"><?php echo $tipoProducto->nombre; ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="txtCantidad">Cantidad:</label>
                    <input type="text" required="" class="form-control" name="txtCantidad" id="txtCantidad"> 
                </div>
                <div class="col-6 form-group">
                    <label for="txtPrecio">Precio:</label>
                    <input type="text" required="" class="form-control" name="txtPrecio" id="txtPrecio">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <label for="txtDescripcion">Descripción:</label>
                    <textarea type="text" class="form-control" name="txtDescripcion" id="txtDescripcion"></textarea>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>

      <script>
        ClassicEditor
            .create( document.querySelector( '#txtDescripcion' ) )
            .catch( error => {
            console.error( error );
            } );
        </script>



<?php include_once("footer.php"); ?>