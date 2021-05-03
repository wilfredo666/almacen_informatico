<?php
include "../conexion.php";

$nom_cli=$_POST["nom_cli"];
$ap_pat_cli=$_POST["ap_pat_cli"];
$ap_mat_cli=$_POST["ap_mat_cli"];
$nit=$_POST["nit"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];


mysqli_query($conectador,"insert into cliente(
nombre_cli,
apellido_pat_cli,
apellido_mat_cli,
ci_cliente,
telefono_cli,
direccion_cli)
values('$nom_cli','$ap_pat_cli','$ap_mat_cli','$nit','$telefono','$direccion');");

?>