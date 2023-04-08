function ejercicio_1() {


    var nombre;// variables locales
    var edad;// para llamar variables globales se usa la palabra reservada let

    nombre = prompt('Ingrese su nombre:', '');
    edad = prompt('Ingrese su edad:', '');

    alert("Tu nombre es: " + nombre); // es como el Joptionpane de JAVA
    alert("Tu edad es: " + edad);

}

function ejercicio_2() {


    var nombre;
    var edad;

    nombre = prompt('Ingrese su nombre:', ''); //es para el ingreso de datos en una ventana superior
    edad = prompt('Ingrese su edad:', '');

    document.write('Hola ');
    document.write(nombre);
    document.write(' asi que tienes ');
    document.write(edad);
    document.write(' años');

}


function ejercicio_3() {

    var nom = document.getElementById('nombre').value;//captura datos 
    var ed = document.getElementById('edad').value;

    alert('Ingresó el nombre:' + nom);
    alert('Y la edad:' + ed);

}



function ejercicio_4() {

    var n1, n2, suma;

    n1 = parseFloat(document.getElementsByName("nume1")[0].value);// para capturar numeros se casthea con parseFloat
    n2 = parseFloat(document.getElementsByName("nume2")[0].value);

    sum = n1 + n2;

    document.getElementsByName("ImprimirResultado")[0].value = sum;

}



function ejercicio_5() {

    var cap, ganancia, gananciaTotal;

    cap = parseFloat(document.getElementsByName("capital")[0].value);

    ganancia = cap * 0.10;

    gananciaTotal = cap + ganancia;

    document.getElementsByName("Imprimir")[0].value = gananciaTotal;
}

function ejercicio_6() {

    var n1, n2, n3, prom;

    n1 = parseFloat(document.getElementsByName("num1")[0].value);
    n2 = parseFloat(document.getElementsByName("num2")[0].value);
    n3 = parseFloat(document.getElementsByName("num3")[0].value);

    prom = (n1 + n2 + n3) / 3;

    document.getElementsByName("Imprimir1")[0].value = prom;

}

function ejercicio_7() {

    var arti, val, total;

    arti = parseFloat(document.getElementsByName("articulo")[0].value);
    val = parseFloat(document.getElementsByName("valor")[0].value);

    total = arti * val;

    document.getElementsByName("Imprimir2")[0].value = total;


}

function ejercicio_8() {

    var arti, val, total, desc, neto;

    arti = parseFloat(document.getElementsByName("articul")[0].value);
    val = parseFloat(document.getElementsByName("valo")[0].value);

    total = arti * val;

    desc = total * 0.10;

    neto = total - desc;

    document.getElementsByName("Imprimir3")[0].value = total;
    document.getElementsByName("Imprimir4")[0].value = desc;
    document.getElementsByName("Imprimir5")[0].value = neto;

}

function ejercicio_9() {

    var salBas, aumen, salTotal;

    salBas = parseFloat(document.getElementsByName("salarioBase")[0].value);

    aumen = salBas * 0.25;

    salTotal = salBas + aumen;

    document.getElementsByName("imprimir6")[0].value = salTotal;

}

function ejercicio_10() {

    var vent1, vent2, vent3, sueld, comis, sueldTotal;

    vent1 = parseFloat(document.getElementsByName("venta1")[0].value);
    vent2 = parseFloat(document.getElementsByName("venta2")[0].value);
    vent3 = parseFloat(document.getElementsByName("venta3")[0].value);
    sueld = parseFloat(document.getElementsByName("sueldo")[0].value);

    comis = (vent1 + vent2 + vent3) * 0.10;

    sueldTotal = sueld + comis;


    document.getElementsByName("imprimircomis")[0].value = comis;
    document.getElementsByName("imprimirtotal")[0].value = sueldTotal

}

function ejercicio_11() {

    var valCompra, desc, neto;

    valCompra = parseFloat(document.getElementsByName("compras")[0].value);

    desc = valCompra * 0.20;

    neto = valCompra - desc;

    document.getElementsByName("imprimirneto")[0].value = neto;


}

function ejercicio_12() {

    var not1, not2, not3, exam, trabajo, prom, promFinal;

    not1 = parseFloat(document.getElementsByName("nota1")[0].value);
    not2 = parseFloat(document.getElementsByName("nota2")[0].value);
    not3 = parseFloat(document.getElementsByName("nota3")[0].value);
    exam = parseFloat(document.getElementsByName("examen")[0].value);
    trabajo = parseFloat(document.getElementsByName("trabajoFinal")[0].value);

    prom = (not1 + not2 + not3) / 3;

    promFinal = (prom * 0.55) + (exam * 0.30) + (trabajo * 0.15);

    document.getElementsByName("printPromFinal")[0].value = promFinal;

}

function ejercicio_13() {

    var hom, muj, total, porcenHom, porcenMuj;

    hom = parseFloat(document.getElementsByName("hombres")[0].value);
    muj = parseFloat(document.getElementsByName("mujeres")[0].value);

    total = hom + muj;

    porcenHom = (hom / total) * 100;

    porcenMuj = (muj / total) * 100;

    document.getElementsByName("porcentaje hombres")[0].value = porcenHom;
    document.getElementsByName("porcentaje mujeres")[0].value = porcenMuj;



}

function ejercicio_14() {

    var presupuesto, onco, gine, pedia, trauma;

    presupuesto = parseFloat(document.getElementsByName("total")[0].value)


    gine = presupuesto * 0.20;
    onco = presupuesto * 0.40;
    pedia = presupuesto * 0.30;
    trauma = presupuesto * 0.10;

    document.getElementsByName("Porcentaje ginecología:")[0].value = gine;
    document.getElementsByName("Porcentaje oncología:")[0].value = onco;
    document.getElementsByName("Porcentaje pediatría:")[0].value = pedia;
    document.getElementsByName("Porcentaje traumatología:")[0].value = trauma;

}

function ejercicio_15() {

    var n1, n2;

    n1 = parseFloat(document.getElementById("nume1").value);
    n2 = parseFloat(document.getElementById("nume2").value);

    if (n1 > n2) {

        alert("El número mayor es: " + n1);

    } else

        alert("El número mayor es: " + n2);

}

function ejercicio_16() {

    var comp, desc, neto;

    comp = parseFloat(document.getElementsByName("comprar")[0].value);

    if (comp < 1000000) {

        desc = comp * 0.10;

        neto = comp - desc;



        document.getElementsByName("descuento")[0].value = desc;
        document.getElementsByName("netPagar")[0].value = neto;

    } else if ((comp > 1000000) && (comp < 2000000)) {

        desc = comp * 0.12;

        neto = comp - desc;


        document.getElementsByName("descuento")[0].value = desc;
        document.getElementsByName("netPagar")[0].value = neto;


    } else {

        desc = comp * 0.15;

        neto = comp - desc;


        document.getElementsByName("descuento")[0].value = desc;
        document.getElementsByName("netPagar")[0].value = neto;
    }

}

function ejercicio_17() { //aca tengo un problema!

    let num1, num2, num3, result;

    num1 = parseInt(document.getElementsByName("nume1")[0].value);
    num2 = parseInt(document.getElementsByName("nume2")[0].value);
    num3 = parseInt(document.getElementsByName("nume3")[0].value);




    if ((num1 < num2 && num1 > num3) || (num1 > num2 && num1 < num3)) {

        result = num1;

    }
    
    else
        if ((num2 < num1 && num2 > num3) || (num2 > num1 && num2 < num3)) {

            result = num2;

        } else {

            result = num3;
        }

    alert("El número del medio es: " + result);


}




function mostrarSumachk() {


    var nchk1 = parseFloat(document.getElementsByName("chknume1")[0].value);
    var nchk2 = parseFloat(document.getElementsByName("chknume2")[0].value);


    if (document.getElementsByName('s1')[0].checked) {

        var sumchk = nchk1 + nchk2;

        document.getElementsByName("ImprimirResultadochk")[0].value = sumchk;
    }


    if (document.getElementsByName('r1')[0].checked) {

        var reschk = nchk1 - nchk2;

        document.getElementsByName("ImprimirResultadochk")[0].value = reschk;
    }

    if (document.getElementsByName('m1')[0].checked) {

        var mulchk = nchk1 * nchk2;

        document.getElementsByName("ImprimirResultadochk")[0].value = mulchk;
    }

    if (document.getElementsByName('d1')[0].checked) {

        var divchk = nchk1 / nchk2;

        document.getElementsByName("ImprimirResultadochk")[0].value = divchk;
    }


}

function ejercicio_18() {

    var sueldo, boni, suelboni, des, total;

    sueldo = parseFloat(document.getElementsByName("salario")[0].value);

    if (document.getElementsByName('male')[0].checked && document.getElementsByName('sol')[0].checked) {

        boni = sueldo * 0.08;
        suelboni = sueldo + boni;
        des = suelboni * 0.06;
        total = suelboni - des;

    }

    if (document.getElementsByName('male')[0].checked && document.getElementsByName('cas')[0].checked) {

        boni = sueldo * 0.10;
        suelboni = sueldo + boni;
        des = suelboni * 0.04;
        total = suelboni - des;

    }

    if (document.getElementsByName('female')[0].checked && document.getElementsByName('sol')[0].checked) {

        boni = sueldo * 0.10;
        suelboni = sueldo + boni;
        des = suelboni * 0.05;
        total = suelboni - des;

    }

    if (document.getElementsByName('female')[0].checked && document.getElementsByName('cas')[0].checked) {

        boni = sueldo * 0.12;
        suelboni = sueldo + boni;
        des = suelboni * 0.03;
        total = suelboni - des;

    }

    document.getElementsByName("tot")[0].value = total;

}

function ejercicio_19() {

    var pares = 0;
    var impares = 0;

    var n1 = parseInt(document.getElementsByName("cuan1")[0].value);

    for (x = 1; x <= n1; x++) {
        valor = prompt('Ingrese valor:');
        valor = parseInt(valor);

        if (valor % 2 == 0) {
            pares = pares + 1;

        }
        else {
            impares = impares + 1;

        }


    }
    document.getElementsByName("par")[0].value = pares;
    document.getElementsByName("imp")[0].value = impares;


}

function ejercicio_20() {

    var x, may;

    x = 1;
    may = 0;

    while (x !== 0) {

        valor = prompt('Ingresa un número:');
        valor = parseInt(valor);
        x++;

        if (may < x) {

            may = x;
        }
    }
    document.getElementsByName("mayor")[0].value = may;


}


