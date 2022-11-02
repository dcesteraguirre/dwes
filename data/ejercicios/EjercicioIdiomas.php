<?php
    if(isset($_POST["envio"])){
        $idioma = $_POST["idioma"];
        $marca = $_POST["marca"];
        setcookie("primeraCookie", $idioma, time() + 500);
        setcookie("segundaCookie", $marca, time() + 500);

        echo"El valor de la cookie es: " . $_COOKIE["primeraCookie"];
        echo"<br>";
        echo"<br>EL valor de la cookie es: " . $_COOKIE["segundaCookie"];
        echo"<br>";
        echo"<br>Número de cookies creadas: " . count($_COOKIE);
        echo"<br>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Refresh" content="60; url='http://ejercicios.local/Idiomas.html'"/>
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['envio'])) {

            if (isset($_POST['envio'])){
                $idioma = $_POST["idioma"];
            switch($idioma){
                case "espagnol":
                    echo "<br>Tu idioma es: " . $idioma;
                    echo "<br>";
                    echo "<br>Bienvenido querido usuario";
                    echo "<br>";
                break;

                case "ingles":
                    echo "<br>Tu idioma es: " . $idioma;
                    echo "<br>";
                    echo "<br>Welcome dear user.";
                    echo "<br>";
                break;

                case "aleman":
                    echo "<br>Tu idioma es: " . $idioma;
                    echo "<br>";
                    echo "<br> Willkommen Sher geehrter Nutzer.";
                    echo "<br>";
                break;

                default:
                    echo "<br>Tu idioma es: " . $idioma;
                    echo "<br>";
                    echo "<br>Bienvenido querido usuario";
                    echo "<br>";
                break;
                }
            }

            if(isset($_POST["envio"])){
                $marca = $_POST["marca"];
                if(!empty($marca)){
                    echo"<br> Tu marca de coche preferido es: " . $marca;
                    echo"<br>";
                }
                else{
                    echo"<br> No ha elegido ninguna marca de coche.";
                    echo"<br>";
                }
            }
        }
    else{

    }
    ?>    
</body>
</html>

<!-- 
Crear web en la que selecciones entre 3 idiomas : español, ingles y aleman
 y selecciones una marca de coche preferida de entre varias y muestre el siguiente mensaje

 Bienvenido querido usuario.
 Welcome dear user.
 Willkommen Sher geehrter Nutzer.

 y la marca de coche seleccionada.

 Esta información se debe guardar en cookies.
 Si no se selecciona idioma por defecto ser español.  -->





    