<?php
    $nombrefich = "modulodwes.txt";
    $fp = fopen($nombrefich,"r"); //true si no hay problemas

    if(!$fp){
        echo"<br> No he podido leer el fichero";
    }else{
        //leer el fichero.
            //caracter a caracter
            // while(!feof($fp)){
            //     $caracter = fgetc($fp);
            //     if($caracter == "\n"){
            //         echo"<br>";
            //     }
                
            // }
            // echo $caracter;

             2 // while(!feof($fp)){
            //     $linea = fgets($fp);
            //     echo $linea . "<br>";
            // }

            // $contenido = fread($fp,filesize($nombrefich));

            // print_r($contenido);
            

    echo "<br>Cerrando el fichero ...";
    fclose($fp);

    $fp2 = fopen($nombrefich,"a");
    if(!$fp2){
        echo"<br>No e podido abrir el fichero para Enviar la informacion";
    }
    else{
        $textoainsertar = "Esta es otra linea." . PHP_EOL;
    }
    fclose($fp2);