<?php

// <-------------------------------------------------------------------------------------->
// Crea una función recursiva que cuente cuántas veces aparece un número específico dentro de un arreglo.

function numEspecifico($n, array $number)
{

    if (count($number) == 0) {
        return 0;
    }

    $encontrar = ($number[0] == $n) ? 1 : 0;
    return $encontrar + numEspecifico($n, array_slice($number, 1));
}

echo "Tu numero aparece: " . numEspecifico(1, [10, 4, 2, 1, 5, 7, 1, 1,]) . " veces<br>";



// <-------------------------------------------------------------------------------------->
//Realiza una función recursiva que encuentre el número menor dentro de un arreglo de enteros.
function numMenor(array $menor)
{

    if (count($menor) == 1) {
        return $menor;
    }

    $num1 = $menor[0];
    $menorResto = numMenor(array_slice($menor, 1));
    return min($num1, $menorResto);
}


echo "El numero menor es: " . numMenor([5, 6, 7, 8]) . "<br>";


// <-------------------------------------------------------------------------------------->
// Crea una función recursiva que repita una cadena de texto n veces.
function cadenaTexto($text, $n)
{
    if ($text == "" || $text == " ") {
        return 0;
    }

    if ($n == 0) {

        return "";
    }

    return $text . cadenaTexto($text, $n - 1);
}
echo "Tu cadena se repite: " . cadenaTexto(" Hola ", 4) . "<br>";




// <-------------------------------------------------------------------------------------->
// Realiza una función recursiva que cuente cuántos números positivos existen dentro de un arreglo.
function numPositivos(array $numeros)
{


    if (count($numeros) == 0) {
        return 0;
    }

    $positivo = ($numeros[0] > 0) ? 1 : 0;
    return $positivo + numPositivos(array_slice($numeros, 1));
}


echo "Hay: " . numPositivos([-1, -2, -3, 1, 2, 3, 4, 5]) . " positivos<br>";




// <-------------------------------------------------------------------------------------->
//Crea una función recursiva que calcule la suma de los cuadrados de los número desde 1 hasta n.
function sumaCuadrados($cuadrado)
{

    if ($cuadrado == 0) {
        return 0;
    }

    return $cuadrado * $cuadrado + sumaCuadrados($cuadrado - 1);
}

echo "La suma de tus cuadrados es: " . sumaCuadrados(4);



?>