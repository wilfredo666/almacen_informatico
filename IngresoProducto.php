<script src="assets/js/producto.js"></script>
<?php
include "panel_control.html";
include "conexion.php";
?>

<div class="content-wrapper">
    <br>
    <!-- contenido principal -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <!--formulario ingreso producto - lado izquierdo-->
                    <form action="" id="form_ingreso_producto" enctype="multipart/form-data">
                        <h4>Ingreso almacen</h4>
                        <div class="row">
                            <div class="col">
                                <?php
                                $resul=mysqli_query($conectador,"select * from producto");
                                ?>
                                <select name="producto" id="producto" class="form-control" onchange="infoProducto();">
                                    <?php

                                    while($f=mysqli_fetch_array($resul))
                                    {
                                        echo "<option value=".$f[0].">$f[1]</option>";
                                    }
                                    ?>
                                </select>
                                <br>
                                <input type="number" name="costo_pro" id="costo_pro"  class="form-control" placeholder="Costo unitario" onkeyup="CostoTotal();"/>
                                <br>
                                <input type="number" name="cantidad_pro" id="cantidad_pro"  class="form-control" placeholder="Cantidad" onkeyup="CostoTotal();"/>
                                <br>
                                <input type="number" name="costo_tot_pro" id="costo_tot_pro"  class="form-control" placeholder="Costo total" readonly/>
                                <br>
                                <div id="mensaje_cont" class="float-left">
                                    
                                </div>
                                <button class="btn btn-primary float-right" type="button" onclick="RegIngreso();">Registrar</button>
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
            </div>

        </div>
    </section>
</div>
<!-- final contenido principal -->
<?php
include "footer.html";
?>
