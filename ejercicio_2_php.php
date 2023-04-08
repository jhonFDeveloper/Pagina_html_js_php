<html>


<head>

    <title>Ejercicio 2 PHP</title>


</head>

<body>

    <?php

    $nombre = $_REQUEST['nomb'];
    $dias = $_REQUEST['dias'];
    $maestro = 150.00;
    $operario = 95.00;
    $peon = 75.00;

    echo "Su nombre es : $nombre";
    echo "<br>";
    echo "<br>";
    echo "Usted trabajó: $dias días";
    echo "<br>";
    echo "<br>";
    echo "__________________________________________________________________________________";
    echo "<br>";

    //Opciones para Maestro  
    


    if ($_REQUEST['radio1'] == 'maestro' && $_REQUEST['radio2'] == 'estable') {


        $total = $dias * $maestro;
        $boni = $total * 0.20;
        $totalPagar = $total + $boni;

        echo "Usted tiene una bonificación por ser maestro estable del 20% sobre su saldo base.";
        echo "<br>";
        echo "<br>";
        echo "Su pago total es de: $totalPagar euros";
        echo "<br>";
        echo "<br>";
        echo "________________________________________________________________________________";
        echo "<br>";

    }
    if ($_REQUEST['radio1'] == 'maestro' && $_REQUEST['radio2'] == 'contratado') {


        $total = $dias * $maestro;
        $boni = $total * 0.10;
        $totalPagar = $total + $boni;

        echo "Usted tiene una bonificación por ser maestro contratado del 10% sobre su saldo base.";
        echo "<br>";
        echo "<br>";
        echo "Su pago total es de: $totalPagar euros";
        echo "<br>";
        echo "<br>";
        echo "______________________________________________________________________________";
        echo "<br>";

    }

    //Opciones para Operario
    
    if ($_REQUEST['radio1'] == 'operario' && $_REQUEST['radio2'] == 'estable') {


        $total = $dias * $operario;
        $boni = $total * 0.20;
        $totalPagar = $total + $boni;

        echo "Usted tiene una bonificación por ser operario estable del 20% sobre su saldo base.";
        echo "<br>";
        echo "<br>";
        echo "Su pago total es de: $totalPagar euros";
        echo "<br>";
        echo "<br>";
        echo "________________________________________________________________________________";
        echo "<br>";

    }
    if ($_REQUEST['radio1'] == 'operario' && $_REQUEST['radio2'] == 'contratado') {


        $total = $dias * $operario;
        $boni = $total * 0.10;
        $totalPagar = $total + $boni;

        echo "Usted tiene una bonificación por ser operario contratado del 10% sobre su saldo base.";
        echo "<br>";
        echo "<br>";
        echo "Su pago total es de: $totalPagar euros";
        echo "<br>";
        echo "<br>";
        echo "______________________________________________________________________________";
        echo "<br>";

    }

    //Opciones para Peón.
    
    if ($_REQUEST['radio1'] == 'peon' && $_REQUEST['radio2'] == 'estable') {


        $total = $dias * $peon;
        $boni = $total * 0.20;
        $totalPagar = $total + $boni;

        echo "Usted tiene una bonificación por ser peon estable del 20% sobre su saldo base.";
        echo "<br>";
        echo "<br>";
        echo "Su pago total es de: $totalPagar euros";
        echo "<br>";
        echo "<br>";
        echo "________________________________________________________________________________";
        echo "<br>";

    }
    if ($_REQUEST['radio1'] == 'peon' && $_REQUEST['radio2'] == 'contratado') {


        $total = $dias * $peon;
        $boni = $total * 0.10;
        $totalPagar = $total + $boni;

        echo "Usted tiene una bonificación por ser peon contratado del 10% sobre su saldo base.";
        echo "<br>";
        echo "<br>";
        echo "Su pago total es de: $totalPagar euros";
        echo "<br>";
        echo "<br>";
        echo "______________________________________________________________________________";
        echo "<br>";

    }









    ?>



</body>



</html>