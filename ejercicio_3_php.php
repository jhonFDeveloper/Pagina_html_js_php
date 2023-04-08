<html>


<head>

<title>Ejercicio 3 php</title>


</head>

<body>

<?php


$Hambur=35.00;
$Papas=15.00;
$Refresco=12.00;
$Pizza=370.00;
$Nughets=25.00;
$Ensalada=30.00;
$Yogurth=15.00;
$Agua=12.00;


if($_REQUEST['radio1']=='combo1'){

    $combo1=$Hambur+$Papas+$Refresco;

    echo "Utsted seleccionó el combo uno!";
    echo "<br>";
    echo "<br>";
    echo "Usted debe pagar un total de: $combo1 euros";
    echo "<br>";
    echo "<br>";

}
if($_REQUEST['radio1']=='combo2'){

    $combo2=$Pizza+$Nughets+$Refresco;

    echo "Utsted seleccionó el combo dos!";
    echo "<br>";
    echo "<br>";
    echo "Usted debe pagar un total de: $combo2 euros";
    echo "<br>";
    echo "<br>";

}
if($_REQUEST['radio1']=='combo3'){

    $combo3=$Ensalada+$Yogurth+$Agua;

    echo "Utsted seleccionó el combo tres!";
    echo "<br>";
    echo "<br>";
    echo "Usted debe pagar un total de: $combo3 euros";
    echo "<br>";
    echo "<br>";

}
if($_REQUEST['radio1']=='combo4'){

   

    echo "Utsted seleccionó el combo cuatro!";
    echo "<br>";
    echo "<br>";
    echo "Lo sentimos aún no tenemos combo 4 :(";
    echo "<br>";
    echo "<br>";

}







?>


</body>



</html>