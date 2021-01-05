<?php 
    include "../../conexion.php";
    session_start();
    if(!isset($_SESSION['rol'])){
        include "../includes/header_idx.php";
    }else{
        if($_SESSION['rol'] !=1 ){
            if($_SESSION['rol'] ==2 ){
                include '../includes/header_user.php';
            }else {
                include '../includes/header_idx.php';
            }
        }else {
            include '../includes/header_admin.php';
        }            
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E"> 
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../css/estilo.css">
</head>
<body>
    <main>
        <div class="container my-5">
            <div class="row col-12">
                <div class="tarjetas p-md-3 col-12 col-md-4">
                    <div class="tar-img">
                        <img src="../../img/nosotros.svg" alt="">
                    </div>
                    <h3>¿Quiénes somos?</h3>
                    <p>AUTOS LEO  ofrece servicios de mantenimiento preventivo y correctivo de vehículos, basado en la objetividad y profesionalismo de sus empleados y de la tecnología utilizada, primando la ética, honestidad y responsabilidad del trabajo realizado, buscando la satisfacción de nuestros clientes proveedores y el crecimiento de nuestra organización como una gran fuente de ingreso de su propietario, a través de un mejoramiento continuo de sus procesos .</p>
                </div>
                <div class="tarjetas p-md-3 col-12 col-md-4">
                    <div class="tar-img">
                        <img src="../../img/mision.svg" alt="">
                    </div>
                    <h3>Misión</h3>
                    <p>Es misión de la empresa prestar un servicio óptimo y oportuno que les
                        garantice a nuestros clientes el mejor desempeño de sus automotores,
                        contando con personal capacitado y competente para brindar una atención
                        personalizada ante cualquier eventualidad.  </p>
                </div>
                <div class="tarjetas p-md-3 col-12 col-md-4">
                    <div class="tar-img">
                        <img src="../../img/vision.svg" alt="">
                    </div>
                    <h3>Visión</h3>
                    <p>Para el 2021 consolidarnos como una de las empresas líderes en el mercado
                        prestando los servicios en mantenimientos preventivos y correctivos en la
                        línea automotriz.
                        Estamos enfocados al crecimiento diario, por eso somos una empresa de
                        proyección, capaz de redefinir el concepto de calidad y garantía que se ofrece
                        en la actualidad.
                        Crecer a la par de los avances tecnológicos, para un continuo mejoramiento
                        y cubrimiento a nivel de servicio, enmarcara que la infraestructura interna sea
                        modificada, que el personal se capacite constantemente y cubra la demanda
                        personalizada del servicio. </p>
                </div>
            </div>
        </div>
    </main>


    <footer class="footer py-4 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-lg-left text-center contac">
                    <h3 class="contac"><a href="#">Contáctenos</a></h3>
                </div>
                <div class="col-lg-6 text-lg-center text-center">
                    <a class="navbar-brand" href="index.php">
                        <img src="../../img/logo-blan.png" alt="">
                    </a>
                </div>
                <div class="col-lg-3 my-3 my-lg-0 text-lg-center text-center">
                    <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-instagram"></i></a>
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