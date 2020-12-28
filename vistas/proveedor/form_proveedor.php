<?php
 include "../../conexion.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E"> 
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <!-- Sweet alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="../../css/estilo.css">
</head>
<body>

<section class="bg-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-nav">
            <div class="col-sm-3 text-center">
                <a class="navbar-brand" href="../../">
                    <img src="../../img/logo-color.png" alt="">
                </a>
            </div>
            <button class="navbar-toggler col-sm-3 ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav hola ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="../../">Inicio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">¿Quienes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-invi dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                            Perfil
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            <button class="dropdown-item" type="button">Mi Perfil</button>
                            <button class="dropdown-item" type="button">Mi Vehículo</button>
                            <button class="dropdown-item" type="button">Reservas</button>
                            <a href="../Usuario/form_cliente.php"><button class="dropdown-item" type="button">(Cliente)</button></a>
                            <a href="#"><button class="dropdown-item" type="button">(Proveedor)</button></a>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item" type="button">Cerrar Sesión</button>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </section>
        <div class="container mt-3">
            
        <form action="guardar_proveedor.php" name="add_form" method="POST" class="col-12">

        <div class="text-center mb-3">
            <h2>Proveedor</h2>
        </div>

        <div class="form-row">
            <div class="col-12 form-group">
                <label>RUT</label>
                <input type="text" class="form-control" name="rut" id="rut" placeholder="RUT">
            </div>
        </div>
        
        <div class="form-row">
            <div class="col-12 form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre">
            </div>
        </div>

        <div class="form-row">
            <div class="col-12 form-group">
                <label>Descripción</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="7" class="form-control" placeholder="Descripción de la empresa..."></textarea>
            </div>
        </div>

        
        <div class="form-row">
            <div class="col-12 form-group">
                <label>Teléfono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Número telefónico">
            </div>
        </div>
        
        <div class="form-row">
            <div class="col-12 form-group">
                <label>Correo</label>
                <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo elctrónico">
            </div>
        </div>

        <div class="form-row">
            <div class="col-12 form-group">
                <label>Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección">
            </div>
        </div>

        <div class="form-row">
            <div class="col-12 form-group">
                <label>Servicio</label>
                <select name="servicio" id="servicio" class="form-control">
                <option value="0">-Seleccione el servicio-</option>
                    <?php 
                    $sel = $conn ->query("SELECT * FROM tblservicios_ofertados");
                                
                    while ($row=$sel->fetch_array()) {
                    ?>
                    <option value="<?php echo $row[0] ?>"> <?php echo $row[1] ?></option>
                    <?php	
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="col-12 col-sm-6 form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" name="contra1" placeholder="Contraseña" id="con1">
            </div>
            <div class="col-12 col-sm-6 form-group">
                <label>Confirmar Contraseña</label>
                <input type="password" class="form-control" name="contra2" placeholder="Confirmar contraseña" id="con2">
            </div> 
            <div class="col-12 text-center"><span id="error2"></span></div>
        </div>

        <div class="text-center">
        <button type="button" class="btn btn-color">Registrar</button>
        </div>
        
        </form>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous ">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous ">
    </script>

    <!--validacion de capos vacios-->
    <script type="text/javascript" src="js/validaciones.js"></script>

</body>  

</html>