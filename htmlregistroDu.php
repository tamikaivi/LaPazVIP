    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body style="background-color:#2D4A5A; "  >
        <nav class="navbar navbar-light" style="background-color: #15BBA7;">
            <img src="logo.png" width="450" height="150" alt="">
            <img src="chole.png" width="450" height="150" alt="">
        </nav>
        <br>
        <br>
        <div>
        <input type="date" name="inicio" style=" float: left; background-color: #15BBA7; margin-left: 200px;" id="inicio" value="" placeholder="Ingresar Fecha"></td>
        <form action="htmlHome_sin_inicio.php">
        <button type="submit" class="btn btn-primary" style=" float: left; background-color: #15BBA7;">Buscar</button>
        </form>
         <form action="htmlHome.php">
         <button type="submit" class="btn btn-primary" style=" float: left; background-color: #15BBA7; margin-left: 500px;">Cerrar Sesión</button>
         </form>
        </div>
        <div>
    <a type="submit" href="htmlHome_sin_inicio.php" style="font-size:40px; color: #ffffff; margin-left: 400px; float: left;"><u>Locales</u></a>
        <a type="submit" href="htmlHome_sin_inicio.php" style="font-size:40px; color: #ffffff; margin-left: 150px; float: left "><u>Música</u></a>
        <a type="submit" href="htmlHome_sin_inicio.php" style="font-size:40px; color: #ffffff; margin-left: 150px; float: left "><u>Bebidas</u></a>
    </div>
        <br>
        <br>
        <br>
        <form class="md-form" action="htmlHome_sin_inicio.php">
            <div class="file-field ">
                <div class="z-depth-1-half mb-4 ">
                   <img src="add.png" style="margin-left:500px" width="450" height="150" class="img-fluid" alt="example placeholder">
               </div>
            </div>
            <br>
            <div style="width : 500px; height : 50px; margin-left:450px">
              <div class="input-group input-group-lg" >
                 <div class="input-group-prepend" >
                    <span style="background-color:#15BBA7; color:#ffffff " class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                 </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ingrese su nombre">
               </div>
            </div>
            <br>
            <div style="width : 500px; height : 50px; margin-left:450px">
              <div class="input-group input-group-lg" >
                 <div class="input-group-prepend" >
                    <span style="background-color:#15BBA7; color:#ffffff " class="input-group-text" id="inputGroup-sizing-sm">Correo</span>
                 </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ingrese su correo">
               </div>
            </div>
            <br>
            <div style="width : 500px; height : 50px; margin-left:450px">
              <div class="input-group input-group-lg" >
                 <div class="input-group-prepend" >
                    <span style="background-color:#15BBA7; color:#ffffff " class="input-group-text" id="inputGroup-sizing-sm">Contraseña</span>
                 </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ingrese una contraseña">
               </div>
            </div>
            <br>
            <div style="width : 500px; height : 50px; margin-left:450px">
              <div class="input-group input-group-lg" >
                 <div class="input-group-prepend" >
                    <span style="background-color:#15BBA7; color:#ffffff " class="input-group-text" id="inputGroup-sizing-sm">Telefono</span>
                 </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ingrese su telefono">
               </div>
            </div>
            <br>
            <div style="width : 500px; height : 50px; margin-left:450px">
              <div class="input-group input-group-lg" >
                 <div class="input-group-prepend" >
                    <span style="background-color:#15BBA7; color:#ffffff " class="input-group-text" id="inputGroup-sizing-sm">Dirección</span>
                 </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ingrese su dirección">
               </div>
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary" style="background-color: #15BBA7; margin-left: 650px;">Crear servicio</button>
            <br>
            <br>
        </form>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    </html>