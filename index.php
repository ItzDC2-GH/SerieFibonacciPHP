<?php
    $numero = $_REQUEST["maximo"]; //Se pide el input por teclado.

    if($numero != null) { //Chequea si el input no es nulo
        $fibonacci = [0,1]; //Establece el array de dos argumentos
        for($i = 2; $i <= $numero; $i++) { //Se crea el ciclo que establezca el máximo 
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2]; //La iteración en el resultado de las dos variables sumadas.
            echo "Iteración número: ". $i. ": ". $fibonacci[$i] . "<br>"; //Imprimimos la iteración y el valor correspondiente.
        }
    }
?>