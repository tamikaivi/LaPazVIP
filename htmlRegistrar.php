<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registrar</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
</head>

<body style="background-color:#2D4A5A; " >
    <nav class="navbar navbar-light" style="background-color: #15BBA7;">
        <img src="logo.png" width="450" height="150" alt="">
        <img src="chole.png" width="450" height="150" alt="">
    </nav>
    <br>
    <br>
    <br>
    <div>
        <input type="date" name="inicio" style=" float: left; background-color: #15BBA7; margin-left: 200px;" id="inicio" value="" placeholder="Ingresar Fecha"></td>
        <form action="htmlHome.php">
        <button type="submit" class="btn btn-primary" style=" float: left; background-color: #15BBA7;">Buscar</button>
        </form>
         <form action="htmlIniciar_sesion.php">
         <button type="submit" class="btn btn-primary" style=" float: left; background-color: #15BBA7; margin-left: 500px;">Iniciar Sesión</button>
         </form>
         <form action="htmlRegistrar.php">
         <button type="submit" class="btn btn-primary" style="float: left; background-color: #15BBA7; margin-left: 30px;">Registrarse</button>
         </form>
        </div>
    <br>
    <br>
    <br>
    <a type="submit" href="htmlHome.php" style="font-size:40px; color: #ffffff; margin-left: 400px; float: left;"><u>Locales</u></a>
        <a type="submit" href="htmlHome.php" style="font-size:40px; color: #ffffff; margin-left: 150px; float: left "><u>Música</u></a>
        <a type="submit" href="htmlHome.php" style="font-size:40px; color: #ffffff; margin-left: 150px; float: left "><u>Bebidas</u></a>
    </div>
        <br>
    <br>
    <br>
    <form action="htmlregistroClien.php">
        <button type="submit" class="btn btn-primary" style="background-color: #15BBA7; margin-left: 600px;">Registrarse como Cliente</button>
    </form>
    <br>
    <br>
    <br>
    <form action="htmlregistroDu.php">
        <button type="submit" class="btn btn-primary" style="background-color: #15BBA7; margin-left: 600px;">Registrarse como Dueño</button>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>