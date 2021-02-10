<?php
include "../conexion.php";

$id=$_POST["producto"];

$costo_pro=$_POST["costo_pro"];
$cantidad_pro=$_POST["cantidad_pro"];
$costo_tot_pro=$_POST["costo_tot_pro"];

mysqli_query($conectador,"insert into ingreso_producto(
id_producto,
costo_unitario,
cantidad,
costo_total)
values('$id','$costo_pro','$cantidad_pro','$costo_tot_pro');");

/*agregando stock a nuestro producto*/

/*1.- sumando el total de ingresos*/
$suma_ingresos = mysqli_query($conectador, "SELECT SUM(cantidad) FROM ingreso_producto WHERE id_producto=$id");
$total_ingresos=mysqli_fetch_row($suma_ingresos);
/*2.- actualizar el stock en nuestra tabla producto*/
mysqli_query($conectador,"UPDATE producto SET stock='$total_ingresos[0]' WHERE id_producto='$id';");

?>