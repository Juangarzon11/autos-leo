<?php
    include "../../../conexion.php";
    session_start();
    if(!isset($_SESSION['rol'])){
        include "../../includes/header_idx.php";
    }else{
        if($_SESSION['rol'] !=1 ){
            if($_SESSION['rol'] ==2 ){
                include '../../includes/header_user.php';
            }else {
                include '../../includes/header_idx.php';
            }
        }else {
            include '../../includes/header_admin.php';
        }            
    }

    $sel = $conn->query("SELECT Id_Proveedor, imagen, Nombre, Descripcion FROM tblproveedores");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
    
    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../../css/estilo.css">

</head>
<body>

<div class="container">
    <section>
        <h1>Proveedores</h1>
    </section>
</div>
    <div class="container">
        <div class="row2">
            <?php
            while($fila=$sel->fetch_assoc()){
            ?>
            <div class="card col-auto m-3" style="width: 18rem;">
                <img class="card-img-top" src="../../../images/<?php echo $fila['imagen']?>" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title text-center"><?php echo $fila['Nombre']?></h3>
                    <p class="card-text text-justify"><?php echo $fila['Descripcion']?></p>
                </div>
                <ul class="list-group list-group-flush text-center precio-productos">
                    <hr>
                    <a href="lista-proveedores.php?pro=<?php echo $fila['Id_Proveedor'] ?>"><button class="btn btn-color mb-3 mt-0"> Ver más</button></a>
                    <!-- <li class="list-group-item"><i class="fas fa-tag"></i> $4.000</li> -->
                </ul>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    
    <footer class="footer py-4 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-lg-left text-center contac">
                    <h3 class="contac"><a href="<?php echo $URL ?>vistas/contactenos/contacto.php">Contáctenos</a></h3>
                </div>
                <div class="col-lg-6 text-lg-center text-center copy">
                <div class="copy__img">
                <h5>Apoyado por:</h5>
                            <img src="../../../img/logo-tecno.png" alt="">
                        </div>
                        <div class="copy__texto">
                            ©Autos Leo
                            <?php echo date('Y'); ?>
                        </div>
                </div>
                <div class="col-lg-3 my-3 my-lg-0 text-lg-center text-center">
                    <a class="redes btn btn-social mx-3" href="https://api.whatsapp.com/message/B7UGDS35RZSUH1" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a class="redes btn btn-social mx-3" href="https://www.facebook.com/autosleosas/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="redes btn btn-social mx-3" href="https://www.instagram.com/autosleo/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>