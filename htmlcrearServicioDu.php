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
        <form  action="menuIb.php">
        <button type="submit" class="btn btn-primary" style="background-color: #15BBA7; margin-left: 30px;">Cerrar Sesión</button>
        </form>
        <div>
        <a type="submit" href="htmlrecervasDu.php" style="font-size:40px; color: #ffffff; margin-left: 500px; float: left;"><u>Reservas</u></a>
        <a type="submit" href="htmlcrearServicioDu.php" style="font-size:40px; color: #ffffff; margin-left: 150px; float: left "><u>Crear Servicio</u></a>  
        </div>
        <br>
        <br>
        <br>
        <form class="md-form">
            <div class="file-field ">
                <div class="z-depth-1-half mb-4 ">
                   <img src="ima.png" style="margin-left:500px" width="450" height="150" class="img-fluid" alt="example placeholder">
               </div>
               <div class="d-flex " style="margin-left:500px">
                   <div class="btn btn-mdb-color btn-rounded float-left">
                       <input type="file" class="btn btn-secundary" style="background-color: #15BBA7; color:#ffffff" value="Choose file"/>   
                   </div>
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
                    <span style="background-color:#15BBA7; color:#ffffff " class="input-group-text" id="inputGroup-sizing-sm">Descrición</span>
                 </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ingrese la descripcion del servicio">
               </div>
            </div>
            <br>
            <div style="width : 500px; height : 50px; margin-left:450px">
              <div class="input-group input-group-lg" >
                 <div class="input-group-prepend" >
                    <span style="background-color:#15BBA7; color:#ffffff " class="input-group-text" id="inputGroup-sizing-sm">Contacto</span>
                 </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ingrese una referencia de contacto">
               </div>
            </div>
            <br>
            <div style="width : 500px; height : 50px; margin-left:450px">
              <div class="input-group input-group-lg" >
                 <div class="input-group-prepend" >
                    <span style="background-color:#15BBA7; color:#ffffff " class="input-group-text" id="inputGroup-sizing-sm">Zona</span>
                 </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ingrese la zona donde se encuentra el servicio">
               </div>
            </div>
            <br>
            <div style="width : 500px; height : 50px; margin-left:450px">
              <div class="input-group input-group-lg" >
                 <div class="input-group-prepend" >
                    <span style="background-color:#15BBA7; color:#ffffff " class="input-group-text" id="inputGroup-sizing-sm">Precio</span>
                 </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ingrese el precio del servicio">
               </div>
            </div>
            <br>
            <div style="width : 500px; height : 50px; margin-left:450px">
              <div class="input-group input-group-lg" >
                 <div class="input-group-prepend" >
                     <button class="btn btn-outline-secondary" style="background-color:#15BBA7; color:#ffffff " type="button">Tipo</button>
                 </div>
                 <select class="custom-select" id="inputGroupSelect03">
                     <option selected>Seleccionar tipo</option>
                     <option value="1">Cholet</option>
                     <option value="2">Música</option>
                     <option value="3">Bebidas</option>
                 </select>
               </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" style="background-color: #15BBA7; margin-left: 650px;">Crear servicio</button>
            <br>
            <br>
        </form>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    </html>