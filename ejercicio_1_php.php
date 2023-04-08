<html>



<head>


</head>

<body>

    <?php



    $pequeña = 7;
    $mediana = 9;
    $familiar = 11;
    $bacon = 1.50;
    $anchoas = 1.80;
    $cebolla = 1;
    $pimiento = 1.20;



    //Opciones para pizza pequeña:
    
    /*pequeña sola*/

    if ($_REQUEST['radio1'] == "pequeña") {

        echo "<body style=background-color:#F6DDCC >";

        echo "<fieldset style=background-color:#F5B041 >";

        echo "<fieldset style=background-color:#27AE60 >";

        echo "<h1 style=color:black  align=center>Pizzería Bigotes</h1>";

        echo "</fieldset>";
        echo "<br>";
        
        echo "<fieldset style=background-color:white ";
        echo "<br>";

        echo "<h2 style=color:black  align=center>Urra! Escogiste una pizza pequeña!</h2>";
        echo "<br>";

        echo "</fieldset>";
        echo "<br>";

        echo "<fieldset style=background-color:#C0392B  >";
        echo "<br>";

        echo "El valor a pagar es:" . "<input type=text value=$pequeña euros>"." Euros";
        echo "<br>";



        echo "<br>";

        echo "</fieldset>";

        echo "</fieldset >";

    }

    /*pequeña + bacon*/

    if (isset($_REQUEST['Bacon']) && $_REQUEST['radio1'] == "pequeña") {

        $pequeñaBacon = $pequeña + $bacon;

        echo "el valor a pagar es: " . $pequeñaBacon . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*pequeña + anchoas*/

    if (isset($_REQUEST['Anchoas']) && $_REQUEST['radio1'] == "pequeña") {

        $pequeñaAncho = $pequeña + $anchoas;

        echo "el valor a pagar es: " . $pequeñaAncho . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*pequeña + cebolla*/

    if (isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "pequeña") {

        $pequeñaCebo = $pequeña + $cebolla;

        echo "el valor a pagar es: " . $pequeñaCebo . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*pequeña + pimineto */


    if (isset($_REQUEST['Pimiento']) && $_REQUEST['radio1'] == "pequeña") {

        $pequeñaPimi = $pequeña + $pimiento;

        echo "el valor a pagar es: " . $pequeñaPimi . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*pequeña + bacon + anchoas*/

    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Anchoas']) && $_REQUEST['radio1'] == "pequeña") {

        $pequeBaAncho = $pequeña + $bacon + $anchoas;

        echo "el valor a pagar es: " . $pequeBaAncho . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*pequeña + bacon + cebolla*/

    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "pequeña") {

        $pequeBaconCebo = $pequeña + $bacon + $cebolla;

        echo "el valor a pagar es: " . $pequeBaconCebo . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*pequeña + bacon + pimiento*/

    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Pimiento']) && $_REQUEST['radio1'] == "pequeña") {

        $pequeBaconPimi = $pequeña + $bacon + $cebolla;

        echo "el valor a pagar es: " . $pequeBaconPimi . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*pequeña + anchoas + cebolla*/


    if (isset($_REQUEST['Anchoas']) && isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "pequeña") {

        $pequeAnchoCebo = $pequeña + $anchoas + $cebolla;

        echo "el valor a pagar es: " . $pequeAnchoCebo . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*pequeña + anchoas + pimiento */


    if (isset($_REQUEST['Anchoas']) && isset($_REQUEST['Pimiento']) && $_REQUEST['radio1'] == "pequeña") {

        $pequeAnchoPimi = $pequeña + $anchoas + $pimiento;

        echo "el valor a pagar es: " . $pequeAnchoPimi . "euros";
        echo "<br>";
        echo "<br>";

    }

    //pequeña + cebolla + pimiento
    
    if (isset($_REQUEST['Pimiento']) && isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "pequeña") {

        $pequePimiCebo = $pequeña + $pimiento + $cebolla;

        echo "el valor a pagar es: " . $pequePimiCebo . "euros";
        echo "<br>";
        echo "<br>";

    }

    //pequeña + bacon + ancohas + cebolla
    
    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Anchoas']) && isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "pequeña") {

        $pequeBaAnchoCe = $pequeña + $bacon + $anchoas + $cebolla;

        echo "el valor a pagar es: " . $pequeBaAnchoCe . "euros";
        echo "<br>";
        echo "<br>";

    }

    //pequeña + bacon + anchoas + cebolla
    
    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Anchoas']) && isset($_REQUEST['Cebolla']) && isset($_REQUEST['Pimiento']) && $_REQUEST['radio1'] == "pequeña") {

        $pequeBaAnchoCePi = $pequeña + $bacon + $anchoas + $cebolla + $pimiento;

        echo "el valor a pagar es: " . $pequeBaAnchoCePi . "euros";
        echo "<br>";
        echo "<br>";
    }





    /*pizza Mediana*/


    //mediana sola
    

    if ($_REQUEST['radio1'] == "mediana") {

        echo "el valor a pagar es: " . $mediana . "euros";
        echo "<br>";
        echo "<br>";

    }

    //mediana + bacon
    
    if (isset($_REQUEST['Bacon']) && $_REQUEST['radio1'] == "mediana") {

        $medianaBacon = $mediana + $bacon;

        echo "el valor a pagar es: " . $medianaBacon . "euros";
        echo "<br>";
        echo "<br>";

    }

    //mediana + anchoas
    

    if (isset($_REQUEST['Anchoas']) && $_REQUEST['radio1'] == "mediana") {

        $medianaAncho = $mediana + $anchoas;

        echo "el valor a pagar es: " . $medianaAncho . "euros";
        echo "<br>";
        echo "<br>";

    }

    //mediana + cebolla
    
    if (isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "mediana") {

        $medianaCebo = $mediana + $cebolla;

        echo "el valor a pagar es: " . $medianaCebo . "euros";
        echo "<br>";
        echo "<br>";

    }

    //mediana + pimiento
    
    if (isset($_REQUEST['Pimiento']) && $_REQUEST['radio1'] == "mediana") {

        $medianaPimi = $mediana + $pimiento;

        echo "el valor a pagar es: " . $medianaPimi . "euros";
        echo "<br>";
        echo "<br>";

    }

    //mediana + bacon + anchoas
    

    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Anchoas']) && $_REQUEST['radio1'] == "mediana") {

        $mediBaAncho = $mediana + $bacon + $anchoas;

        echo "el valor a pagar es: " . $mediBaAncho . "euros";
        echo "<br>";
        echo "<br>";

    }


    /*mediana + bacon + cebolla*/

    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "mediana") {

        $mediBaconCebo = $mediana + $bacon + $cebolla;

        echo "el valor a pagar es: " . $mediBaconCebo . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*mediana + bacon + pimiento*/

    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Pimiento']) && $_REQUEST['radio1'] == "mediana") {

        $mediBaconPimi = $mediana + $bacon + $pimiento;

        echo "el valor a pagar es: " . $mediBaconPimi . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*mediana + anchoas + cebolla*/


    if (isset($_REQUEST['Anchoas']) && isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "mediana") {

        $mediAnchoCebo = $mediana + $anchoas + $cebolla;

        echo "el valor a pagar es: " . $mediAnchoCebo . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*mediana + anchoas + pimiento */


    if (isset($_REQUEST['Anchoas']) && isset($_REQUEST['Pimiento']) && $_REQUEST['radio1'] == "mediana") {

        $mediAnchoPimi = $mediana + $anchoas + $pimiento;

        echo "el valor a pagar es: " . $mediAnchoPimi . "euros";
        echo "<br>";
        echo "<br>";

    }

    //mediana + cebolla + pimiento
    
    if (isset($_REQUEST['Pimiento']) && isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "mediana") {

        $mediPimiCebo = $mediana + $pimiento + $cebolla;

        echo "el valor a pagar es: " . $mediPimiCebo . "euros";
        echo "<br>";
        echo "<br>";

    }

    // mediana + bacon + anchoas + cebolla
    

    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Anchoas']) && isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "mediana") {

        $mediBaAnchoCe = $mediana + $bacon + $anchoas + $cebolla;

        echo "el valor a pagar es: " . $mediBaAnchoCe . "euros";
        echo "<br>";
        echo "<br>";

    }

    // mediana+ bacon + anchoas + pimiento
    

    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Anchoas']) && isset($_REQUEST['Cebolla']) && isset($_REQUEST['Pimiento']) && $_REQUEST['radio1'] == "mediana") {

        $mediBaAnchoCePi = $mediana + $bacon + $anchoas + $cebolla + $pimiento;

        echo "el valor a pagar es: " . $mediBaAnchoCePi . "euros";
        echo "<br>";
        echo "<br>";


    }

    /*pizza Familiar*/


    // familiar sola
    

    if ($_REQUEST['radio1'] == "familiar") {

        echo "el valor a pagar es: " . $familiar . "euros";
        echo "<br>";
        echo "<br>";

    }

    //familiar + bacon
    
    if (isset($_REQUEST['Bacon']) && $_REQUEST['radio1'] == "familiar") {

        $famiBacon = $familiar + $bacon;

        echo "el valor a pagar es: " . $famiBacon . "euros";
        echo "<br>";
        echo "<br>";

    }

    // familiar + anchoas
    
    if (isset($_REQUEST['Anchoas']) && $_REQUEST['radio1'] == "familiar") {

        $famiAncho = $familiar + $anchoas;

        echo "el valor a pagar es: " . $famiAncho . "euros";
        echo "<br>";
        echo "<br>";

    }

    // familiar + cebolla
    

    if (isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "familiar") {

        $famiCebo = $familiar + $cebolla;

        echo "el valor a pagar es: " . $famiCebo . "euros";
        echo "<br>";
        echo "<br>";

    }

    //familiar + pimiento
    
    if (isset($_REQUEST['Pimiento']) && $_REQUEST['radio1'] == "familiar") {

        $famiPimi = $familiar + $pimiento;

        echo "el valor a pagar es: " . $famiPimi . "euros";
        echo "<br>";
        echo "<br>";

    }

    //familiar + bacon + anchoas
    
    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Anchoas']) && $_REQUEST['radio1'] == "familiar") {

        $famiBaAncho = $familiar + $bacon + $anchoas;



        echo "el valor a pagar es: " . $famiBaAncho . "euros";
        echo "<br>";
        echo "<br>";

    }


    /*familiar + bacon + cebolla*/

    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "familiar") {

        $famiBaconCebo = $familiar + $bacon + $cebolla;

        echo "el valor a pagar es: " . $famiBaconCebo . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*familiar + bacon + pimiento*/

    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Pimiento']) && $_REQUEST['radio1'] == "familiar") {

        $famiBaconPimi = $familiar + $bacon + $cebolla;

        echo "el valor a pagar es: " . $famiBaconPimi . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*familiar + anchoas + cebolla*/


    if (isset($_REQUEST['Anchoas']) && isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "familiar") {

        $famiAnchoCebo = $familiar + $anchoas + $cebolla;

        echo "el valor a pagar es: " . $famiAnchoCebo . "euros";
        echo "<br>";
        echo "<br>";

    }

    /*familiar + anchoas + pimiento */


    if (isset($_REQUEST['Anchoas']) && isset($_REQUEST['Pimiento']) && $_REQUEST['radio1'] == "familiar") {

        $famiAnchoPimi = $familiar + $anchoas + $pimiento;

        echo "el valor a pagar es: " . $famiAnchoPimi . "euros";
        echo "<br>";
        echo "<br>";

    }

    //familiar + cebolla + pimiento
    
    if (isset($_REQUEST['Pimiento']) && isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "familiar") {

        $famiPimiCebo = $familiar + $pimiento + $cebolla;

        echo "el valor a pagar es: " . $famiPimiCebo . "euros";
        echo "<br>";
        echo "<br>";

    }

    //familiar + bacon + anchoas + cebolla
    
    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Anchoas']) && isset($_REQUEST['Cebolla']) && $_REQUEST['radio1'] == "familiar") {

        $famiBaAnchoCe = $familiar + $bacon + $anchoas + $cebolla;

        echo "el valor a pagar es: " . $famiBaAnchoCe . "euros";
        echo "<br>";
        echo "<br>";


    }

    //familiar + bacon + anchoas + pimiento
    
    if (isset($_REQUEST['Bacon']) && isset($_REQUEST['Anchoas']) && isset($_REQUEST['Cebolla']) && isset($_REQUEST['Pimiento']) && $_REQUEST['radio1'] == "mediana") {

        $famiBaAnchoCePi = $familiar + $bacon + $anchoas + $cebolla + $pimiento;

        echo "el valor a pagar es: " . $famiBaAnchoCePi . "euros";
        echo "<br>";
        echo "<br>";

    }


    ?>


</body>





</html>