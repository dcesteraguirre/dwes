<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informacion del fichero:</h1>
    <?php
        if(isset($_POST["envio"])) {
            echo "<br>Nombre del fichero: " . $_FILES["myfile"]["name"]; 
            echo "<br>Tamaño del fichero: " . $_FILES["myfile"]["size"]; 
            echo "<br>Extensión del fichero: " . $_FILES["myfile"]["type"]; 
            echo "<br>Nombre del fichero temporal : " . $_FILES["myfile"]["tmp_name"]; 

            $destino = "subidos/" . $_FILES["myfile"]["name"];
            $flag = move_uploaded_file($_FILES["myfile"]["tmp_name"],$destino);
            echo $flag ? "Fichero subido correctamente" : "Fallo en la subida";

        }
        else{
            echo"<p>No has enviado ningún fichero</p>";
        }
    ?>
</body>
</html>