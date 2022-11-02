<?php

    //time(); //epoch time , unix -> segundos 1970.
    // strtotime();

    $miarray = ['a'=> "hola,25,[1,3,5]"];
    $infoguardar = serialize($miarray);

    $infojson = json_encode($miarray);
    echo "<br>Codificación del array en JSON: " , $infojson;
    $micad = '{"a":hola,"b":10}';
    var_dump(json_decode($micad));
    echo"<br>Infor en json: " . $infojson;

    setcookie("PrimeraCookie",$infoguardar,time()+300);
    setcookie("PrimeraCookie",$infojson,time()+600);

    // definir una cookie 
    // setcookie("primeracookie","aceptado",time("+1 week")); //una semana
    //setcookie("primeracookie","aceptado",time()+60);
    //dura un dia la cookie

     echo "<h1>Mi primera cookie</h1>";
     echo "<br>Valor de la cookie uno : " . $_COOKIE["PrimeraCookie"];
     echo"<pre>";
     echo"<br>Valor de cookie dos: ";
     var_dump($infojson);



     echo "Número de cookies creadas : " . count($_COOKIE);

    //  setcookie("primeracookie","aceptado",time()-120);