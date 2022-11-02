<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="miformu" action="/Login.php" method="POST">
        <p>
            <label for="nombre">Introduce Nombre: </label>
            <input type="text" name="usuario" id="usuario">
        </p>
        <p>
            <label for="password">Introduce la contraseña: </label>
            <input type="password" name="passwd" id="passwd">
        </p>
        
        <input type="submit" name="envio" id="envio" value="Enviar">


        <?php
            if(isset($_POST['usuario']) && !empty($_POST["passwd"])){

                $usuario = $_POST["usuario"];
                $password = $_POST["passwd"];
            
                if($usuario != "usuario"| $usuario != "admin" | $password != "1234" | $password != "admin"){
                    header("Refresh:2; url=http://ejercicios.local/Login.php");
                    echo "<br> EL usuario o la contraseña son incorrectos. Prueba otra vez. ";
                } 
                else if($usuario == "usuario" && $password == 1234){
                    header("Refresh:2; url=http://ejercicios.local/principal.php");
                    echo "<br> Has iniciado sesion como usuario";
                }
            }  
            
        ?>
  
</body>
</html>
<!-- 
Crear un entorno de login.
    - La página de login: usuario y password(login.php)
        - usuario = usuario
        - password = 1234 => ok, rol=0

        - usuario = admin
        - password = admin, rol=1
        
        - Si no ok => Muestra mensaje login incorrecto.
        - Si login ok => principal.hp "Bienvenido usuario"
        - Enlace logout.php
    - logout.php => Cerrar la sesion y enlace/redireccion a login.php -->