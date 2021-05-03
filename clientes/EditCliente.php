<?php
include "../conexion.php";

$id=$_GET["id"];

$nom_cli=$_POST["nom_cli"];
$ap_pat_cli=$_POST["ap_pat_cli"];
$ap_mat_cli=$_POST["ap_mat_cli"];
$nit=$_POST["nit"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];

mysqli_query($conectador, "update cliente set nombre_cli='$nom_cli', apellido_pat_cli='$ap_pat_cli',apellido_mat_cli='$ap_mat_cli',ci_cliente='$nit',telefono_cli='$telefono',direccion_cli='$direccion' where id_cliente='$id'");
?>