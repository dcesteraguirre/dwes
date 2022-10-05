<?php

    $var1 = 6;
    $var2 = 7;

    function suma($a, $b){
        // global $var1;
        // global $var2;
        $var1 = 99;
        $var2 = 100;
        echo"<br>La variable dentro de la funcion var1 y var2 son : " . $var1 . " y " . $var2;


         // definicion varibales estatica
        static $varestatica = 0;
        echo "<br> EL valor de la var estatica es : " . $varestatica;
        $varestatica++;

        return $a + $b;
    }

   

    echo "<br>La varibale a y b son : " . $a . " y " . $b;

    echo"<br>LA variable fuera de la funcion var1 y var2 son : " . $var1 . " y " . $var2;
    echo "<br>Llamada de suma 1 es : " . suma(3,5);
    echo "<br>Llamada de suma 2 es : " . suma(3,5);
    echo "<br>Llamada de suma 3 es : " . suma(3,5);

    // paso de parametros por valor o por referencia(variable)
    function restar($op1, $op2){
        $op1 = $op1 - $op2;
        return $op1;
    }

    echo"<br>Llamda por valor : " . restar(8,3);

    // paso de parametros por valor o por referencia(variable)
    function restar2($var3, $var4){
        $var3--;
        echo"<br> var 3 vale" . $var3;
    }

    $var3 = 8;
    $var4 = 3;

    echo"<br>Llamda por valor : " . restar($var3,6);



        


