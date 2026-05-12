<?php

// <!-- Ejemplo 4. Fibonacci -->
function fibonacci($n){


    $n1= 0;
    $n2= 1;
    $suma=0;
    for ($i=0; $i < $n; $i++) { 

        $suma = $n1 + $n2;
        $n1 = $n2; 
        $n2 = $suma;
        echo $n1 ."</br>";
    }
   
}
echo fibonacci(10);

echo "<br>";

// Ejemplo 5. Invertir una cadena de texto

function invertirCadena($texto){

        $array_text = str_split($texto);
        
        $last_Position = array_key_last($array_text);

    for ($i=$last_Position; $i >= 0 ; $i--) { 
    echo $array_text[$i];

           }
}

echo invertirCadena("Hola Mundo");



?>



<!--  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participacion 1</title>
</head>
<body>
    
</body>
</html>