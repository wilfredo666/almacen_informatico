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
                        <div class="col-4">
                            <h4>Buscar producto</h4>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-info btn-circle" disabled><i class="fas fa-search"></i></button>
                                </div>
                                <input type="text" name="dat_producto" id="dat_producto"  class="form-control" placeholder="Escriba el producto que desee buscar" onkeyup="BuscarProducto();">
                            </div>
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <br>
                    <table class="table table-bordered">
                        <thead>                  
                            <tr>
                                <th>Id Item</th>
                                <th>Descripcion</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Proveedor</th>
                                <th style="width: 40px">Stock</th>
                                <td><button onclick="nuevoProducto();" type="button" class="btn btn-primary">Nuevo</button></td>
                            </tr>
                        </thead>
                        <tbody id="res_bus_producto" class="res_bus_producto">

                            <?php
                            $res=mysqli_query($conectador,"SELECT `id_producto`,`descripcion`,`marca`,`modelo`,`nombre_prov`,`stock` FROM `producto`
                                JOIN proveedor
                                ON proveedor.id_proveedor=producto.id_proveedor;");
                            while($f=mysqli_fetch_array($res))
                            {
                            ?>
                            <tr>
                                <td><?php echo " $f[0] ";?></td>
                                <td><?php echo " $f[1] ";?></td>
                                <td><?php echo " $f[2] ";?></td>
                                <td><?php echo " $f[3] ";?></td>
                                <td><?php echo " $f[4] ";?></td>
                                <td><?php echo " $f[5] ";?></td>
                                <td>
                                    <div class="btn-group">
                                        <button onclick="VerProducto(<?php echo $f[0]; ?>);" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></button>
                                        <button onclick="MEditProducto(<?php echo $f[0]; ?>);" class="btn btn-secondary btn-circle"><i class="fas fa-edit"></i></button>
                                        <button onclick="MEliProducto(<?php echo $f[0]; ?>);" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!--paginacion-->
                    <div class="row">
                        <?php
                        echo "aqui";
                        include "paginacion.php";
                        $pag=new producto(3);
                        ?>
                    </div>
                    <!--final paginacion-->
                </div>
            </div>
        </div>
    </section>
    <!-- final contenido principal -->


</div>
<?php
include "footer.html";
?>