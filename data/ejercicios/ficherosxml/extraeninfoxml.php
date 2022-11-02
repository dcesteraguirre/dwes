<?php
    $datos  =simplexml_load_file("empleados.xml");
    $apellidos = $datos->xpath("//apellidos");
    foreach($apellidos as $apellido){
        echo "<br> Apellidos :" . $apellido;
        print_r($apellido);
    }
