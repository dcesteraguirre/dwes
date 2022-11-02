<?php
    //calcula el inverso del numero pasado como parametro
    function inverso($num){

        return 1/$num;
        
    }//

    try{
        echo "El inverso del numero 5 es :" . $inverso(5);
    }catch(Exception $e){
        echo "La razon de la excepcion es : " . $e->getMessage();
    }finally{
        echo  "Esto siempre se ejecuta";
    }