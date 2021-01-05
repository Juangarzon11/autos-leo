<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos Leo</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E"> 
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-nav">
            <div class="col-sm-3 text-center">
                <a class="navbar-brand" href="<?php echo $URL; ?>">
                    <img src="<?php echo $URL; ?>img/logo-color.png" alt="">
                </a>
            </div>

            <button class="navbar-toggler col-sm-3 ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav hola ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo $URL; ?>">Inicio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $URL; ?>vistas/nosotros/nosotros.php">¿Quienes somos?</a>
                    </li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-invi dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                            Perfil
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            <a href="<?php echo $URL; ?>vistas/login/login.php"><button class="dropdown-item" type="button">Iniciar sesión</button></a>
                            <a href="<?php echo $URL; ?>vistas/Usuario/form_cliente.php"><button class="dropdown-item" type="button">Registrarse</button></a>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
</body>

</html>