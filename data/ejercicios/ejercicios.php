<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicios</title>
</head>

<body>
    <h1>Pagina de chequeo de datos de registro de libro</h1>

    <?php
    if(isset($_GET['nombreautor']) && !empty($_GET["nombreautor"]) ){
        $autor = $_GET['nombreautor'];
        echo "<br> El nombre de autor introducido es : " . $autor;
    }
    else{
        echo "<br><h2>No has introducido ningun autor</h2>";
    }

    if(isset($_GET['titulolibro']) && !empty($_GET["titulolibro"]) ){
        $titulo = $_GET['titulolibro'];
        echo "<br> El titulo del libro introducido es : " . $titulo;
    }
    else{
        echo "<br><h2>No has introducido ningun titulo de libro</h2>";
    }

    if(isset($_GET['editorial']) && !empty($_GET["editorial"]) ){
        $editorial = $_GET['editorial'];
        echo "<br> El nombre de la ediotrial es : " . $editorial;
    }
    else{
        echo "<br><h2>No has introducido ninguna editorial</h2>";
    }

    if(isset($_GET['numero']) && !empty($_GET["numero"]) ){
        $numero = $_GET['numero'];
        echo "<br> El numero introducido es : " . $numero;
    }
    else{
        echo "<br><h2>No has introducido ningun número</h2>";
    }
    ?>
    
</body>
</html>