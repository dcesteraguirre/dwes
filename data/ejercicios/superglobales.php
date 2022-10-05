<?php
    $mihost = $_SERVER['HTTP_HOST'];
    echo "<br>EL host al que va la peticion es : " . $mihost;

    echo "<br>El lenguaje / idioma : " . $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    echo "<br>El nombre de la pagina actual que realiza la solicitud : " . $_SERVER['PHP_sELF'];
    echo "<br>El tipo de navegador: " . $_SERVER['HTTP_USER_AGENT'];
/*mostrar aqui:
    - el nombre del servidor web
    - el lenguaje
    - el nombre de la pagina actual que realiza la solicitud
    - el tipo de navegador que realiza la solicitud
    */
