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
    ?>
    
</body>
</html>