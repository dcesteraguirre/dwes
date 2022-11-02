<?php

    $capitales = [
        "españa" => "madrid",
        "francia" => "parís"
    ];

    $infotrans = ""; //informacion trans
    $infonotrans = ""; //informacion de vuelta a la original


    $infotrans = serialize($capitales);
    echo "<br>Informacion serializada : ";
    var_dump($infotrans);

    $infonotrans = unserialize($infotrans);
    echo "<br>Informacion Deserializada : ";
    var_dump($infonotrans);

    $infotrans = json_encode($capitales);
    echo "<br>Informacion en Json : ";
    var_dump($infotrans);

    $infotrans = json_decode($infotrans);
    echo "<br>Informacion original desde json : ";
    var_dump($infotrans);