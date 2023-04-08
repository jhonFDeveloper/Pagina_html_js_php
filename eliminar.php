<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

$conexion=mysqli_connect("localhost","root","","bd2") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion, "SELECT id FROM clientes WHERE id='$_REQUEST[id]'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
  mysqli_query($conexion,"DELETE from clientes WHERE id='$_REQUEST[id]'") or
    die("Problemas en el select:".mysqli_error($conexion));

  echo "<script>alert('El usuario fue borrado con éxito'); location.href='CRUD.html'</script>";
}
else
{
  echo "No existe un cliente con ese id.";
}
mysqli_close($conexion);
?>
</body>
</html>