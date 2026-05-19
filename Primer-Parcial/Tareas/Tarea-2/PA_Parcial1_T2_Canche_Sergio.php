<?php
//Ejercicio 1 -Crea una función recursiva que calcule la potencia de un número.
function potenciaNumero($num, $p)
{
    if ($p == 0) {

        return 1; //Aquí se establece el caso base de la función recursiva, ya que cualquier número elevado a la potencia de 0 es igual a 1, por lo que se devuelve 1 como resultado final de la función cuando el exponente es 0.
    }
    if ($num == 0) {

        return 0; //Aquí se establece otro caso base de la función recursiva, ya que 0 elevado a cualquier potencia es igual a 0, por lo que se devuelve 0 como resultado final de la función cuando el número es 0.
    }
    return $num * potenciaNumero($num, $p - 1); //Finalmente aqui vamos multiplicando el número por la potencia del mismo número pero con el exponente restado en 1, esto se hace para que la función se ejecute hasta que el exponente llegue a 0, momento en el cual se detendrá la función y se devolverá el resultado final de la potencia del número.
}
echo "El resultado es: " . potenciaNumero(10, 3) . "<br>";
//La ejecución se vería de la siguiente manera:
//10 * potenciaNumero(10, 2)
//-> 10 * (10 * potenciaNumero(10, 1))
//-> 10 * (10 * (10 * potenciaNumero(10, 0)))
//-> 10 * (10 * (10 * 1))
//-> 10 * (10 * 10)
//-> 10 * 100
//-> 1000.









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





//  <--------------------------------------------------------------------------------------->
// Ejercicio 3 - Función recursiva para contar cuantos caracteres tiene una cadena de texto
function contarCadena($text)
{
    if ($text == "") { //En el caso base, si la cadena es vacía, se devuelve 0, ya que una cadena vacía no contiene caracteres, y a su vez evitamos que se ejecute infinit
        return 0;

    }
  
    return 1 + contarCadena(substr($text, 1)); //Aqui vamos sumando de 1 en 1 en base a la cantidad de caracteres que tiene la cadena, utilizando substr para obtener una subcadena de la cadena original, pero evitando que se repita el primer caracter.
}
echo "Tu texto tiene " . contarCadena("Hola") . " caracteres" . "</br>";
//El resultado es 4, ya que se cuentan los caracteres de la cadena "Hola" de la siguiente manera:
//1 + contarCadena("ola")
//1+1 + contarCadena("la")
//1+1+1 + contarCadena("a")
//1+1+1+1 + contarCadena("")
//1+1+1+1 + 0 -> 4.








//  <--------------------------------------------------------------------------------------->
//  Ejercicio 4 - Determinar si un texto o frase es un palindromo
function palindromo($text)
{
    $text = strtolower(str_replace(" ", "", $text)); //Primero limpiamos el texto eliminando espacios con replace y convertimos el texto a minusculas con lower
    $longitud = strlen($text); //Aquí obtenemos la longitud del texto para luego usarla en la función recursiva, ya que se usará la longitud para comparar el primer y el último caracter del texto.
    if($longitud <= 1){ //En la condición se verifica si la longitud del texto es menor o igual a 1, ya que un texto con una longitud de 0 o 1 siempre será un palíndromo.
        return "Sí";
    }
    if ($text[0] != $text[$longitud - 1]) { //Aquí se compara el primer caracter del texto con el último caracter del texto, utilizando la longitud del texto para obtener el índice del último caracter, y si ambos caracteres son diferentes devolvemos NO como resultado final de la función.
        return "NO";
    }
   
    return palindromo(substr($text,1,-1));
    }
echo "Tu texto " . palindromo("Reconoce") . " es un palindromo </br>";








//  <--------------------------------------------------------------------------------------->
// Ejercicio 5 - Implementa el algoritmo de Euclides utilizando recursividad para calcular el MCD entre dos números. El algoritmo de Euclides, es un algoritmo eficiente utilizado para calcular el MCD de dos números enteros, basado en realizar divisiones sucesivashasta obtener un residuo cero.
function mcdEuclides($value1, $value2){
if($value2 == 0){ //El caso base del algoritmo de Euclides es cuando el segundo número es 0, ya que en ese momento el MCD es el primer número, por lo que se devuelve el primer número como resultado final de la operación
return $value1;
}
$residuo = $value1 % $value2; //En esta condición se calcula el residuo de la división del primer número entre el segundo número, ya que el algoritmo de Euclides se basa en realizar divisiones sucesivas hasta obtener un residuo cero, por lo que se guarda el residuo en una variable para luego usarlo en la siguiente llamada recursiva.
return mcdEuclides($value2, $residuo); //Finalmente se hace la llamada recursiva a la función, pero esta vez el primer número es el segundo número de la llamada anterior, y el segundo número es el residuo que se calculó en la línea anterior, esto se hace para seguir realizando las divisiones sucesivas hasta obtener un residuo cero, momento en el cual se detendrá la función y se devolverá el resultado final del MCD.
}

echo "El MCD es: " . mcdEuclides(100, 32)."<br>"; //En este ejemplo, el resultado del MCD entre 100 y 32 es 4, ya que el algoritmo de Euclides se ejecutaría de la siguiente manera:
//mcdEuclides(100, 32) -> residuo = 100 % 32 = 4
//mcdEuclides(32, 4) -> residuo = 32 % 4 = 0
//mcdEuclides(4, 0) -> se devuelve 4 como resultado final del MCD.









//  <--------------------------------------------------------------------------------------->
// Ejercicio 6 - Convertir decimal a Binario
function convertirBinario($n)
{
    if ($n == 0) { 
        return ""; //En el caso base, cuando el número es 0, se devuelve una cadena vacía, ya que el resultado final de la conversión a binario no debe incluir un 0 al principio. Con esto evitamos incogruencias como "01010" en lugar de "1010". 

    }
    return convertirBinario(Intdiv($n, 2)) . $n % 2; //Se usa Intdiv para que cuando se divida el numero entre 2, se redondee hacia abajo y no se convierta en un decimal, y se usa % para obtener el residuo del numero.
}
echo "Tu numero en binario es: " . convertirBinario(10) . "</br>";  // El resultado es 1010, ya que 10 dividido entre 2 es 5, y el residuo es 0, luego 5 dividido entre 2 es 2, y el residuo es 1, luego 2 dividido entre 2 es 1, y el residuo es 0, y finalmente 1 dividido entre 2 es 0, y el residuo es 1, por lo que el resultado final es 1010.










//  <--------------------------------------------------------------------------------------->
//Ejercicio 7 - Realiza una función recursiva que sume todos los elementos de un arreglo.
function sumarArreglos(array $elements)
{

    if (count($elements) == 0) { 
        return 0; //En el caso base contamos el número de elementos del arreglo, y si el número de elementos es 0, se devuelve 0, ya que la suma de un arreglo vacío es 0, y a su vez evitamos que se ejecute infinitamente.
    }

    return $elements[0] + sumarArreglos(array_slice($elements, 1)); //Aqui sumamos el primer elemento del arreglo con los demas numeros del arrego. Se hace uso de array slice para que se cree un nuevo arreglo con los elementos del anterior arreglo, pero evitando que se repita el primer elemento, y así lo hará haciendo cada vez que se ejecute la función, hasta que el arreglo quede vacío, momento en el cual se detendrá la función y se devolverá el resultado final de la suma de todos los elementos del arreglo.

}
echo "La suma de tu arreglo es: " . sumarArreglos([50, 50]), "<br>"; //El resultado es 100, ya que se suman los elementos del arreglo de la siguiente manera:
//  50 + sumarArreglos([50]) 
// -> 50 + (50 + sumarArreglos([])) 
// -> 50 + (50 + 0) -> 100.






//  <--------------------------------------------------------------------------------------->
//Ejercicio 8 - Crea una función recursiva que determine si un elemento existe dentro de un arreglo.
function encontrarElemento($elemento, array $arreglo){
if(empty($arreglo)){

    return "No existe o está vació tu arreglo"; //En el caso usamos empty ya que un arreglo vacio no tiene elementos que se puedan buscar en ello.
}

if($arreglo[0] == $elemento){
    return "Sí existe"; //En esta condición se verifica si el primer elemento del arreglo es igual al elemento que se está buscando, y si es así, se devuelve "Sí existe" como resultado final de la función, ya que se ha encontrado el elemento en el arreglo.
}

 return encontrarElemento($elemento, array_slice($arreglo,1)); //Usamos array slice para crear un nuevo arreglo con los elementos del arreglo original, pero evitando que se repita el primer elemento, y así lo hará haciendo cada vez que se ejecute la función, hasta que el arreglo quede vacío.
}

echo "Tu elemento existe en el arreglo: " . encontrarElemento("Hola",["Dios","Mundo","Hola","Sí"])."</br>";
//El resultado es "No existe o está vació tu arreglo", ya que se busca el elemento "Hola" en el arreglo ["Dios","Mundo","Hola","Sí"], y se verifica cada elemento del arreglo de la siguiente manera:
//"Dios" == "Hola" -> No
//"Mundo" == "Hola" -> No
//"Hola" == "Hola" -> Sí, por lo que se devuelve "Sí existe" como resultado final de la función, ya que se ha encontrado el elemento en el arreglo.








//  <--------------------------------------------------------------------------------------->
// Ejercicio 9 - Realiza una función recursiva que cuente cuántas vocales contiene una cadena de texto.

function contarVocales($cadena){
if ($cadena === "") { //En el caso base, si la cadena es vacía, se devuelve 0, ya que una cadena vacía no contiene vocales, y a su vez evitamos que se ejecute infinitamente.
    return 0;
}    
    $letras = strtolower($cadena[0]); //Aquí se obtiene la primera letra de la cadena y se convierte a minúscula para que la función pueda contar tanto vocales mayúsculas como minúsculas, evitando errores al momento de verificar si la letra es una vocal o no.
    $vocal = (stripos("aeiou", $letras) !== false) ? 1 : 0; //En esta línea se verifica si la letra obtenida es una vocal, utilizando la función stripos para buscar la letra en la cadena "aeiou", y si la letra se encuentra en la cadena, se devuelve 1 mediante el operador ternario y si no existe la vocal se devuelve 0.
    return $vocal + contarVocales(substr($cadena, 1)); //Aqui finalmente vamos sumando cada comparación que se va haciendo en base a la variable $vocal que es la que va ir sumando 1 cada vez que encuentra una vocal.
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
echo "La suma de tus pares es: " . sumaPares(10); //El resultado es 30, ya que se suman los números pares desde 0 hasta 10 de la siguiente manera:
//10 + sumaPares(8)
//-> 10 + 8 + sumaPares(6)
//-> 10 + 8 + 6 + sumaPares(4)
//-> 10 + 8 + 6 + 4 + sumaPares(2)
//-> 10 + 8 + 6 + 4 + 2 
//-> 10 + 8 + 6 + 4 + 2 + sumaPares(0)
//-> 10 + 8 + 6 + 4 + 2 + 0
?>