<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="crud.css" />

    <title>Consulta de datos </title>
</head>


<body>

    <div class="container">

        <?php

        $id = $_REQUEST['id'];

        $conexion = mysqli_connect("localhost", "root", "", "bd2") or
            die("Problemas con la conexión");

        $Registros = mysqli_query($conexion, "SELECT id,nombre,apellido,telefono,direccion,sexo FROM clientes WHERE id=$id")
            or die("Problemas en el select" . mysqli_error($conexion));


        echo "<h1>Resultado de la busqueda</h1>";


        echo "<table >";


        echo "<tr class='trcabecera'> 	              
		      			 		<th> ID </th>
		       			 		<th> Nombre </th>
		       			 		<th> Apellido </th>
		       			 		<th> Teléfono </th>
		       			 		<th> Dirección </th>  
                                <th> Sexo </th>   			 		

      			 	   </tr>";

        while ($reg = mysqli_fetch_array($Registros)) {

            echo "<tr>
                        <td>" . $reg['id'] . "</td>
      					<td>" . $reg['nombre'] . "</td>
      					<td>" . $reg['apellido'] . "</td>
      					<td>" . $reg['telefono'] . "</td>
      					<td>" . $reg['direccion'] . "</td>
      					<td>" . $reg['sexo'] . "</td>

      			</tr>";

            ;
        }

        echo "</table>";

        mysqli_close($conexion);
        ?>
    </div>

    <button class="boton"><a href="CRUD.html">Regresar</a></button>

    

  


</body>

</html>