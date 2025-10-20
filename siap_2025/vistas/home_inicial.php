<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
            <li class="cerrar-sesion"><a href="puntos_manizales.php">Luminarias Manizales</a></li>
            <li class="cerrar-sesion"><a href="pruebagpx.php">Luminaris Prueba gpx</a></li>
            
            
        </ul>
    </div>

    <section>
        <h1>Bienvenido a la Administración <?php echo $user->getNombre();  ?></h1>
    </section>
    
</body>
</html>