<?php

include("conexion.php");
$con = conectar();


$sql = "SELECT * FROM clientes WHERE  id='$_REQUEST[id]'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>Actualizar Datos</title>

  <style>
    body {

      background: linear-gradient(to right, #C39BD3, #76D7C4);
    }
  </style>
</head>

<body>

  <div class="container mt-5 mb-5 shadow">
    <div class="row text-center">

      <div class="text-center pt-5">
        <img src="img/editar.png" alt="">
      </div>

      <h1>Actualizar información</h1>

      <form action="update.php" method="POST">


        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">


        <input type="text" class="form-control mb-3 mt-5" name="nombre" placeholder="Nombre"
          value="<?php echo $row['nombre'] ?>">


        <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido"
          value="<?php echo $row['apellido'] ?>">


        <input type="text" class="form-control mb-3 " name="telefono" placeholder="Telefono"
          value="<?php echo $row['telefono'] ?>">


        <input type="text" class="form-control mb-3 " name="direccion" placeholder="direccion"
          value="<?php echo $row['direccion'] ?>">

        <input type="text" class="form-control mb-3 " name="sexo" placeholder="Sexo" value="<?php echo $row['sexo'] ?>">

        <div class="p-3 text-center">
          <input type="submit" class="btn btn-info" value="Modificar"><br>
        </div>

        <div class=" text-center p-5">
          <a href="CRUD.html" class="btn btn-primary">Regresar</a>
        </div>


      </form>

    </div>

  </div>




</body>

</html>