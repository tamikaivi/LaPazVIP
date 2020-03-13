<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
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
    <div>
    <a type="submit" href="htmlHome.php" style="font-size:40px; color: #ffffff; margin-left: 400px; float: left;"><u>Locales</u></a>
        <a type="submit" href="htmlHome.php" style="font-size:40px; color: #ffffff; margin-left: 150px; float: left "><u>Música</u></a>
        <a type="submit" href="htmlHome.php" style="font-size:40px; color: #ffffff; margin-left: 150px; float: left "><u>Bebidas</u></a>
    </div>
        <br>
    <br>
    <br>
    <div class="z-depth-1-half mb-4 ">
                   <img src="user.png" style="margin-left:570px" width="250" height="250" class="img-fluid" alt="example placeholder">
               </div>
    <div style="width : 500px; height : 50px; margin-left:450px">
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span style="background-color:#15BBA7; color:#ffffff " class="input-group-text" id="inputGroup-sizing-sm">Correo Electrónico</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Correo Electrónico">
        </div>
    </div>
    <br>
    <br>
    <div style="width : 500px; height : 50px; margin-left:450px">
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span style="background-color:#15BBA7; color:#ffffff " class="input-group-text" id="inputGroup-sizing-sm">Contraseña</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Contraseña">
        </div>
    </div>
    <br>
    <br>
    <br>
    <form action="htmlHome_sin_inicio.php">
        <button type="submit" class="btn btn-primary" style="background-color: #15BBA7; margin-left: 650px;">Iniciar Sesión</button>
    </form>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>