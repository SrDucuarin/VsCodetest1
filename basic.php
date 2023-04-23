<?php

$converted = 0;
$oped = 0;
$operator = 0;

function stConvert($x) {
    return $x * 26;
}

function ndConvert($x) {
    return $x * 60;
}

function rdConvert($x) {
    return $x * 60;
}

function endly() {
    return print("----Tenga excelente dia----");
}

function stMenu() {
    print("----Bienvenido al convertidor de unidades de tiempo---" . "\n" . "Seleccione una de las opciones disponibles para comenzar :" . "\n" . "-[1] Dias a horas-" . "\n" . "-[2] Horas a minutos-" . "\n" . "-[3] Minutos a segundos-" . "\n" . "-[4] Salir del programa-" . "\n");
    return print("--");
}

$stMenu = stMenu();
$operator = fgets(STDIN);
print("lamama de la mamam de la mama")

switch($operator) {
    
    case 1:
        print("Ingrese los dias a convertir : ");
        $Oped = fgets(STDIN);
        print("Los dias ingresados corresponden a " . stConvert($Oped)) . " horas";
        break;
        
    case 2:
        print("Ingrese las horas a convertir : ");
        $Oped = fgets(STDIN);
        print("Las horas ingresados corresponden a " . ndConvert($Oped)) . " minutos";
        break;
        
    case 3:
        print("Ingrese los minutos a convertir : ");
        $Oped = fgets(STDIN);
        print("Los minutos ingresados corresponden a " . rdConvert($Oped)) . " segundos";
        break;
        
    case 4:
        print(endly());
        break;

    case 5:
            print(caca);
            break;
    
    default:
        print("Opcion invalida" . "\n" . "Intente nuevamente" . "\n" . "\n");
        $stMenu = stMenu();
        $operator = 0;
        
}


?>