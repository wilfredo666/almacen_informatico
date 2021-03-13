<script src="assets/js/producto.js"></script>
<?php
include "panel_control.html";
include "conexion.php";
?>
<div class="content-wrapper">
    <h4 align="center">Ventas</h4>
    <br>
    <!-- contenido principal -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <!--formulario ingreso producto - lado izquierdo-->
                    <form action="" id="form_salida_producto" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col">
                                <label for="">Seleccione el producto</label>
                                <select name="producto" id="producto" class="form-control" onchange="infoProducto();">
                                    <option readonly>-- Seleccionar --</option>
                                    <?php
                                    $resul=mysqli_query($conectador,"select * from producto");
                                    while($f=mysqli_fetch_array($resul))
                                    {
                                        echo "<option value=".$f[0].">$f[1]</option>";
                                    }
                                    ?>
                                </select>
                                <br>
                                <input type="number" name="cantidad_pro" id="cantidad_pro"  class="form-control" onkeyup="TotalVenta();" placeholder="Cantidad"/>
                                <br>
                                <label for="">Total</label>
                                <input type="number" name="total" id="total"  class="form-control" readonly/>
                                <br>
                                <label for="">Seleccione cliente</label>
                                <?php
                                $destino=mysqli_query($conectador,"select * from cliente");
                                ?>
                                <select name="cliente" id="cliente" class="form-control" onchange="infoDestino();">
                                    <?php

                                    while($des=mysqli_fetch_array($destino))
                                    {
                                        echo "<option value=".$des[0].">$des[1]</option>";
                                    }
                                    ?>
                                </select>
                                <br>
                                <div id="mensaje_cont" class="float-left">
                                </div>
                                <button class="btn btn-primary float-right" type="button" onclick="RegVenta();">Registrar</button>
                            </div>
                        </div>
                    </form>     
                </div>
                <!--final - formulario ingreso producto-->

                <!--detalles del producto - lado derecho-->
                <div class="col" id="info_producto">
                    <!-- aqui se muestra informacion del producto de "IngInfoProducto"-->
                </div>
                <!--final - detalles del producto-->

                <!--detalles del producto - lado derecho-->
                <div class="col" id="info_destino">
                    <!-- aqui se muestra informacion del producto de "IngInfoProducto"-->
                </div>
                <!--final - detalles del producto-->
            </div>

        </div>
    </section>
</div>
<!-- final contenido principal -->
<?php
include "footer.html";
?>
