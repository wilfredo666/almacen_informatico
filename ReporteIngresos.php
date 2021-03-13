<script src="assets/js/producto.js"></script>
<?php
include "panel_control.html";
include "conexion.php";

?>
<div class="content-wrapper">

    <!-- contenido principal -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9">
                            <form action="" id="form_consulta" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-2">
                                    <p class=lead"">Seleccione fecha:</p>
                                    </div>
                                    <div class="col-3">
                                        <input type="date" name="fecha_inicio" id="fecha_ingreso" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <input type="date" name="fecha_fin" id="fecha_salida" class="form-control">
                                    </div>
                                    <div class="3">
                                        <button class="btn btn-primary float-right" type="button" onclick="consultarIngresos();">Consultar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <table class="table table-bordered">
                        <thead>                  
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio unitario</th>
                                <th>Total</th>
                                <th>Fecha</th>
                                <td><button onclick="" type="button" class="btn btn-success">Imprimir</button></td>
                            </tr>
                        </thead>
                        <tbody id="resp_consulta">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- final contenido principal -->


</div>
<?php
include "footer.html";
?>