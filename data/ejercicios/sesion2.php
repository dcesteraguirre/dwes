<?php
    session_start();//creo o me uno a la sesion

    $nombresesion = session_name();
    echo "Nombre de sesion creada anteriormente : " . $nombresesion;

    // $_SESSION = array();
    // session_destroy();
    // setcookie(session_name(),'',time(),-7200,'/');



    echo "He visitado la pagina " .$_SESSION["contador"] . " veces.";

    echo "<br>Producto: " . $_SESSION["producto"];