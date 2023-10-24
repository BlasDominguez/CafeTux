<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="../../css/_inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: brown;">
            <div class="container-fluid">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 50%;">
                    <img src="../../img/logob.png" width="40px">
                    <div style="padding-left: 40%;">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="float: right;">
                            <li class="nav-item" style="margin: 10px;">
                                <a type="button" class="btn btn-outline-secondary" href="../vistas/registro.php">Registrarse</a>
                            </li>
                        </ul>
                    </div>
                    
                    
                </div>
            </div>
        </nav>
    </header> 

    
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center><a href="../../_index.html" id="regresa">X</a></center> 
                <img src="../../img/logob.png" width="10%"><p>Inicio de Sesion</p>
            </div>
            <div class="card-body">
                <form action="../controlador/validaMenu.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Correo Electrónico</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="contrasena" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Contraseña</label>
                    </div><br>
                    <div class="col-12">
                        <button type="submit" class="card-header">Iniciar Sesion</button>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>