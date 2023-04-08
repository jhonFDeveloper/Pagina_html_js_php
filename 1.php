<html>

<body>

  <?php
  /* Programa para imprimir las tablas de multiplicar desde la 1 a la 10 */
  $saludo = "Hola a todos";

  for ($tabla = 1; $tabla <= 10; $tabla++) //<-un ciclo de 10 (uno para cada tabla)
  {


    // Encabezado
    echo "<table border=1 cellspacing=1 width=400>";
    echo "<tr><th colspan=5> Tabla del $tabla </th></tr>";

    // generamos la tabla 
    for ($i = 1; $i <= 10; $i++) {

      echo "<tr>

             <td align=center>$tabla</td>
             <td align=center>x</td>
             <td align=center>$i</td>
             <td align=center>=</td>
             <td align=center> " . ($tabla * $i) . "</td>

           </tr>";
    }
       echo "</table> <br/>";
       echo "</table> <br/>";

  }


  ?>
</body>

</html>