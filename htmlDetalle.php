<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Detalle</title>
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
    <div class="list-group " style="background-color: #ffffff; width : 700px; height : 700px; margin-left: 400px; ">
        <a href="#" style="background-color: #15BBA7;" class="list-group-item list-group-item-action flex-column align-items-start active">
            <div class="d-flex w-100 justify-content-between">
                <div>
                    <h4 class="mb-1">Banda Internacional Poopó</h4>
                    <h7>Banda de Música</h7><br>
                    <h7>77377966</h7><br>
                    <h7>Bs. 2008</h7>
                </div>

            </div>
        </a>
        <br>
        <br>
        <br>
        
    </div>
    <div class="d-flex w-100 justify-content-between">
            <form action="">
                <button type="submit" class="btn btn-primary" style="background-color: #15BBA7; margin-top: 20px; margin-left: 500px; width : 500px; height : 50px;">Reservar</button>
            </form>
    </div>
    <br>
    <br>
    <br>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>