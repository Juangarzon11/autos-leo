<?php
include '../../conexion.php';

?>
<!DOCTYPE html>
<html lang="en">

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
        <div class="container mt-3">
            <form action="ingresar_cliente.php" name="add_form" method="POST" class="col-12">

                <div class="text-center mb-3">
                    <h2>Regístrate</h2>
                </div>

                <div class="form-row">
                    <div class="col-12 form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombres" placeholder="Ingrese los nombres" id="nombre">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-12 form-group">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" placeholder="Ingrese los apellidos" id="apellido">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 form-group">
                        <label>Número De Cédula</label>
                        <input type="text" class="form-control" name="identificacion" placeholder="Cédula ciudadanía" id="cedula">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 form-group">
                        <label>Celular</label>
                        <input type="text" class="form-control" name="celular" placeholder="Número de celular" id="celular">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 form-group">
                        <label>Ciudad de residencia</label>
                        <input type="text" class="form-control" name="ciudad" placeholder="Ciudad de residencia" id="ciudad">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 form-group">
                        <label>Dirección</label>
                        <input type="text" class="form-control" name="direccion" placeholder="Dirección de residencia" id="direccion">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control" name="correo" placeholder="Correo electrónico" id="correo">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-6 form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="contra1" placeholder="Contraseña" id="con1">
                    </div>
                    <div class="col-6 form-group">
                        <label>Confirmar Contraseña</label>
                        <input type="password" class="form-control" name="contra2" placeholder="Confirmar contraseña" id="con2">
                    </div>
                    <div class="col-12 text-center"><span id="error2"></span></div>
                </div>

                <div class="text-center mb-3">
                    <button type="button" class="btn btn-color">Registrar</button>
                </div>

                <div class="col-12 text-center mb-4">
                    <a href="../login/login.php">¿Ya tienes cuenta?</a>
                </div>

            </form>

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