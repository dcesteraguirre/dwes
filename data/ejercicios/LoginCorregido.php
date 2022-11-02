<?php
    // usuario : 1234
    // admin : 4567
    function comprobarcredenciales($nombreusu,$clave){
        if($nombreusu === "usuario" && $clave === "1234"){
            $credenciales["nombreusu"] = "usuario";
            $credenciales["rol"] = 0;
            return $credenciales;
        }

        if($nombreusu === "admin" && $clave === "4567"){
            $credenciales["nombreusu"] = "admin";
            $credenciales["rol"] = 1;
            return $credenciales;
        }
        return false;
    }//function

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["envio"])){
            $credentials = comprobarcredenciales($_POST["usuario"],$_POST["password"]);
            if($credentials === false){
                $error = 1;
            }
            else{
                session_start();
                $_SESSION["usuariook"] = $credentials;
                header("Location: principal.php");
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Inicia sesión</h2>
    <?php
        if(isset($error) && $error == 1){
            echo "<p><font color=\"red\">Credenciales invalidas</font></p>";
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <br>
        <label for="usuario">Introduce Usuario: </label>
        <input type="text" name="usuario" id="usuario">
        <br>
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" name="envio" value="Acceder">
    </form>
</body>
</html>