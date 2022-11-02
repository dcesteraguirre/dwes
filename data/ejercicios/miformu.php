<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulario</h1>
    <form name="miformu" action="autoriza.php" method="GET">
        <p>
            <label for="nombre">Introduce Nombre: </label>
            <input type="text" name="nombreusu" id="nombreusu">
        </p>
        <p>
            <label for="password">Introduce la contraseña: </label>
            <input type="password" name="passwd" id="passwd">
        </p>

        <p>
            Elige tu equipo de balonceso preferido:</p>
        </p>
        <p>
            <label for="equipo1">Casademont Zaragoza</label>
            <input type="radio" name="equipo" id="equipo1" value="Casademont" checked>
            <label for="equipo1">San Pablo Burgos</label>
            <input type="radio" name="equipo" id="equipo2" value="San Pablo Burgos" checked>
            <label for="equipo1">Obradoiro</label>
            <input type="radio" name="equipo" id="equipo3" value="Obradoiro" checked>
        </p>


        <p> Elige tu plato favorito:</p>
        <p>
            <!-- select>option*4 -->
            <select name="menus" id="menus">
                <option value="codillo">Codilllo Asado</option>
                <option value="ensalada">Ensalada Cesar</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>

        <p> Elige tus platos favorito(SELECT MULTIPLE):</p>
        <p>
            <select name="menusm[]" id="menus" multiple=5 required>
                <option value="codillo">Codilllo Asado</option>
                <option value="ensalada">Ensalada Cesar</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>
        <p>
            <label for="asignatura1">PHP </label>
            <input type="checkbox" name="asignaturas" id="asignatura1" value="PHP">

        </p>


        <input type="hidden" name="ip" value="<?= $_SERVER['SERVER_ADDR'] ?>">



        <input type="submit" name="envio" id="envio" value="Enviah">
    </form>
</body>

</html>