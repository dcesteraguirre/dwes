<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autoriza</title>
</head>
<body>
    <h1>Pagina de chequeo de credenciales</h1>
    <h2>Si has llehado aqui eres un heroes</h2>


    <?php
        if(isset($_GET['nombreusu']) && !empty($_GET["nombreusu"]) ){
            $usuario = $_GET['nombreusu'];
            echo "<br> El nombre de usuario introducido es : " . $usuario;
        }
        else{
            echo "<br><h3>No has introducido ningun usuario</h3>";
        }
        
        echo "<br> La contraseña introducida es: " . $_GET['passwd'];
    
        if(isset($_GET['envio'])){
            if(!empty($_GET['asignaturas'])){
                $asignaturas = $_GET['asignaturas'];
                foreach($asignaturas as $asignatura){
                    echo "<br> Te encanta el leng programacion : " . $asignatura;
                }
            }else{
                echo "<br>No te gusta la programación: ";
            }
        }
    
        if(isset($_GET["envio"])){
            $equipobasket = $_GET["equipo"];
            if(!empty($equipobasket)){
                echo "<br> Tu equipo de basket preferido es : " . $equipobasket;

            }
            else{
                echo "<br>No has elegido ningun equipo.";
            }
        }

        if(isset($_GET["envio"])){
            $menupreferidos = $_GET["menus"];
            if(!empty($menupreferidos)){
                echo "<br> Tu plato preferido es : " . $menupreferidos;

            }
            else{
                echo "<br>No has elegido ningun plato.";
            }
        }

        if(isset($_GET["envio"])){
            $menupreferido = $_GET["menusm"];
            if(!empty($menupreferido)){
                foreach($menupreferido as $menu)
                echo "<br> Tu plato preferido es : " . $menu;

            }
            else{
                echo "<br>No has elegido ningun plato.";
            }
        }
    
    ?>

</body>
</html>