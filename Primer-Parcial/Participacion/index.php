<?php

// <!-- Ejemplo 4. Fibonacci -->
function fibonacci($n){


    $n1= 0;
    $n2= 1;
    $suma=0;
    for ($i=0; $i < $n; $i++) { 

        $suma = $n1 + $n2;
        $n1 = $n2; // ¿Quién debería pasar a ser el número anterior?
        $n2 = $suma;
        echo $n1 ."</br>";
    }
   
}

echo fibonacci(10);



?>



<!-- Ejemplo 5. Invertir una cadena de texto -->


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