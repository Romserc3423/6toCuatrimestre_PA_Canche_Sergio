<?php
//Ejercicio 1 -Crea una función recursiva que calcule la potencia de un número.

function potenciaNumero($num, $p)
{

    if ($p == 0) {

        return 1;
    }
    if ($num == 0) {

        return 0;
    }
    return $num * potenciaNumero($num, $p - 1);
}

echo "El resultado es: " . potenciaNumero(10, 3) . "<br>";



//  <--------------------------------------------------------------------------------------->
// Ejercicio 2 - Realiza una función recursiva que multiplique dos números enteros utilizando únicamente sumas.

function multipEnteros($n1, $n2)
{

    if ($n1 == 0 || $n2 == 0) { //En esta condición se verifica si alguno de los dos números es 0, ya que si alguno de los dos números es 0, el resultado de la multiplicación siempre será 0.
        return 0;
    }
    return $n1 + multipEnteros($n1, $n2 - 1); //Aquí se suma el primer número con la multiplicación de los dos números, pero restando 1 al segundo número para que la función se ejecute hasta que el segundo número llegue a 0, momento en el cual se detendrá la función y se devolverá el resultado final de la multiplicación.

}

echo "El resultado de tu multiplicacion es: " . multipEnteros(5, 3) . "<br>";
//Por ejemplo aqui tenemos 5 y 3 y se vería asi: 
//5 + multipEnteros(5, 2) 
//5 + (5 + multipEnteros(5, 1)) 
//5 + (5 + (5 + multipEnteros(5, 0))) 
// 5 + (5 + (5 + 0))
// 5 + (5 + 5) -> 5 + 10 -> 15, por lo que el resultado final de la multiplicación es 15.



// Ejercicio 3 - Función recursiva para contar cuantos caracteres tiene una cadena de texto
function contarCadena($text)
{

    if (count(str_split($text)) == 0) {
        return 0;

    }
    return count(str_split($text));

}
echo "Tu texto tiene " . contarCadena("Hola, amigos de PHP") . " caracteres" . "</br>";


//  Ejercicio 4 - Determinar si un texto o frase es un palindromo
function palindromo($text)
{
    $text = strtolower(str_replace(" ", "", $text));
    if ((strrev($text)) != $text) {
        return "No";
    }
    return "Sí";
}

echo "Tu texto " . palindromo("Anita lava la tina") . " es un palindromo </br>";


//  <--------------------------------------------------------------------------------------->
// Ejercicio 5 - Implementa el algoritmo de Euclides utilizando recursividad para calcular el MCD entre dos números. El algoritmo de Euclides, es un algoritmo eficiente utilizado para calcular el MCD de dos números enteros, basado en realizar divisiones sucesivashasta obtener un residuo cero.
function mcdEuclides($value1, $value2){

if($value2 == 0){
return $value1;
}
$residuo = $value1 % $value2;
return mcdEuclides($value2, $residuo);
}

echo "El MCD es: " . mcdEuclides(100, 32)."<br>";


//  <--------------------------------------------------------------------------------------->
// Ejercicio 6 - Convertir decimal a Binario
function convertirBinario($n)
{
    if ($n == 0) {
        return "";

    }
    return convertirBinario(Intdiv($n, 2)) . $n % 2; //Se usa Intdiv para que cuando se divida el numero entre 2, se redondee hacia abajo y no se convierta en un decimal, y se usa % para obtener el residuo del numero.
}
echo "Tu numero en binario es: " . convertirBinario(10) . "</br>";  // El resultado es 1010, ya que 10 dividido entre 2 es 5, y el residuo es 0, luego 5 dividido entre 2 es 2, y el residuo es 1, luego 2 dividido entre 2 es 1, y el residuo es 0, y finalmente 1 dividido entre 2 es 0, y el residuo es 1, por lo que el resultado final es 1010.





//  <--------------------------------------------------------------------------------------->
//Ejercicio 7 - Realiza una función recursiva que sume todos los elementos de un arreglo.
function sumarArreglos(array $elements)
{

    if (count($elements) == 0) {
        return 0;
    }

    return $elements[0] + sumarArreglos(array_slice($elements, 1));

}
echo "La suma de tu arreglo es: " . sumarArreglos([50, 50]), "<br>";



// Ejercicio 9 - Realiza una función recursiva que cuente cuántas vocales contiene una cadena de texto.

function contarVocales($cadena){
if ($cadena === "") {
    return 0;
}    
    $letras = strtolower($cadena[0]);
    $vocal = (stripos("aeiou", $letras) !== false) ? 1 : 0;
    return $vocal + contarVocales(substr($cadena, 1));
}

echo "Tu texto tiene: ". contarVocales("Programación"). " vocales<br>";







//  <--------------------------------------------------------------------------------------->
// Ejercicio 10 - Crea una función recursiva que calcule la suma de todos los números pares desde 0 hasta n.
function sumaPares($par)
{

    if ($par == 0) { //Se usa esta condición para que cuando el numero llegue a 0, se detenga la función y no siga restando 2, ya que si se sigue restando 2, el numero se volvería negativo y la función seguiría ejecutándose indefinidamente.
        return 0;
    }
    if ($par % 2 !== 0) { //En esta condición se verifica si el numero es impar, ya que si el numero es impar, no se debe sumar y solo va a devolver 0. 
        return 0;

    }
    return $par + sumaPares($par - 2); //En esta línea se suma el numero par actual con la suma de los pares anteriores, restando 2 para obtener el siguiente numero par. Por ejemplo, si el numero es 10, se sumaría 10 + 8 + 6 + 4 + 2 + 0, lo que daría como resultado 30.
}

echo "La suma de tus pares es: " . sumaPares(10);

?>