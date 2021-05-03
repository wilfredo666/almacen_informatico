<?php
include "conexion.php";
include "panel_control.html";
?>
<script src="assets/js/cliente.js"></script>
<div class="content-wrapper">

    <!-- contenido principal -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card-body">
                   <div class="row">
                        <div class="col-4">
                            <h4>Clientes</h4>
                        </div>
                       <!--  <div class="col-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-info btn-circle" disabled><i class="fas fa-search"></i></button>
                                </div>
                                <input type="text" name="dat_cliente" id="dat_cliente"  class="form-control" placeholder="Buscar por: nombre, ci/nit del cliente" onkeyup="BuscarCliente();">
                            </div>
                        </div>
                        <div class="col-2">
                        </div>
                    </div>-->
                    <br>
                    <table class="table table-bordered">
                        <thead>                  
                            <tr>
                                <th>Nombre(s)</th>
                                <th>Nit/C.I.</th>
                                <th>Telefono(s)</th>
                                <th>Direccion</th>
                                <td><button onclick="MnuevoCliente();" type="button" class="btn btn-primary">Nuevo</button></td>
                            </tr>
                        </thead>
                        <tbody id="res_bus_cliente">

                            <?php
                            $res=mysqli_query($conectador,"SELECT * FROM cliente");
                            while($f=mysqli_fetch_array($res))
                            {
                            ?>
                            <tr>
                                <td><?php echo " $f[1] $f[2] $f[3] ";?></td>
                                <td><?php echo " $f[4] ";?></td>
                                <td><?php echo " $f[5] ";?></td>
                                <td><?php echo " $f[6] ";?></td>
                                <td>
                                    <div class="btn-group">
                                        <button onclick="MEditCliente(<?php echo $f[0]; ?>);" class="btn btn-secondary btn-circle"><i class="fas fa-edit"></i></button>
                                        <button onclick="MEliCliente(<?php echo $f[0]; ?>);" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
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
