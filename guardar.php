<html>

<head>

    <title>Problema</title>

</head>

<body>

    <?php

    if ($_REQUEST['sexo'] == "F") {
        $Sexo = "Femenino";
    }
    if ($_REQUEST['sexo'] == "M") {
        $Sexo = "Masculino";
    }
    if ($_REQUEST['sexo'] == "I") {
        $Sexo = "Otro";
    }



    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];



    $conexion = mysqli_connect("localhost", "root", "", "bd2") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "insert into clientes(nombre,apellido,telefono,direccion,sexo)
     values('$nombre','$apellido','$telefono','$direccion','$Sexo')")

        or die("Problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "<script>alert('La información del cliente fue guardada con éxito'); window.location='CRUD.html'</script>"

        ?>


</body>

</html>