<?php

include("conexion.php");
$con=conectar();

$id_cliente=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];

$sql="UPDATE clientes SET nombre='$nombre',apellido='$apellido',telefono='$telefono',direccion='$direccion',sexo='$sexo' WHERE id='$id_cliente'";

$query=mysqli_query($con,$sql);

    if($query){
        echo "<script> alert('Se actualizaron los datos correctamente'); window.location='CRUD.html'</script>";
    }
?>