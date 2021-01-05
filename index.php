<?php 
    include "conexion.php";
    session_start();
    if(!isset($_SESSION['rol'])){
        include "vistas/includes/header_idx.php";
    }else{
        if($_SESSION['rol'] !=1 ){
            if($_SESSION['rol'] ==2 ){
                include 'vistas/includes/header_user.php';
            }else {
                include 'vistas/includes/header_idx.php';
            }
        }else {
            include 'vistas/includes/header_admin.php';
        }            
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos Leo</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E"> 
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <section class="bg-ind"></section>
    <section class="">
    <br>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod accumsan sagittis. Maecenas quam ante, fringilla eu posuere sit amet, porta id libero. Nam eleifend magna venenatis nisl luctus dignissim. Vivamus ornare posuere laoreet. Nullam pharetra volutpat ex vel blandit. Nam rutrum feugiat ante ac sodales. Vestibulum dignissim sapien tellus. Curabitur pulvinar ante augue, eget lacinia ante aliquet quis. In non tristique nibh, nec maximus libero. Nunc a nisi volutpat, mattis quam vitae, sodales enim. Aenean gravida ultrices ligula eget pellentesque.

Praesent suscipit et neque congue finibus. Pellentesque accumsan accumsan enim mattis elementum. Nulla condimentum neque ex, sed ultrices ex facilisis ac. Pellentesque sodales, lectus vitae laoreet posuere, dui leo venenatis urna, ut blandit urna ante nec ante. Duis ac vulputate lorem. Ut vehicula nunc massa, quis maximus quam eleifend id. Aenean vestibulum arcu urna. Donec hendrerit ex a dolor pellentesque lacinia. Curabitur ante urna, commodo a vulputate in, pulvinar sed est. Cras at ultrices magna, eu pulvinar sapien. Sed mattis eu lorem non condimentum. Mauris vitae metus ligula. Curabitur luctus porta porta. Morbi dictum ipsum sapien, id sollicitudin est auctor non. Aliquam quis nisi eu nulla semper posuere in ultricies velit. Integer porta laoreet hendrerit.

Nullam at diam sollicitudin, iaculis sapien nec, blandit est. Nunc orci dolor, porta at lobortis sit amet, lacinia eu ante. Quisque varius ac dolor vel cursus. Phasellus a tortor sodales quam mollis rutrum ut non ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed eget ligula ac felis ullamcorper varius eu eu elit. Aenean non eros ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum iaculis velit quis eleifend congue. Duis accumsan finibus tortor eget tempus. Sed volutpat aliquet mi et rhoncus. Curabitur egestas commodo mi, ut pretium turpis. Integer sit amet viverra turpis, id egestas tellus. Donec quis placerat ligula. Nulla pharetra elit nibh. In finibus, justo aliquam blandit pellentesque, enim tortor vestibulum magna, eu venenatis massa lacus ut mauris.

Pellentesque facilisis viverra dui, quis egestas dolor tristique sed. Pellentesque congue posuere lectus tristique feugiat. Vivamus molestie blandit est a efficitur. Duis facilisis scelerisque turpis, ultrices posuere nunc sagittis in. Vivamus eros mi, bibendum vel scelerisque non, luctus a risus. Sed sed sapien dapibus, accumsan lectus sed, ultricies metus. Pellentesque nec nisl dapibus massa varius suscipit. Maecenas et commodo dui. Fusce cursus augue odio, at mattis diam egestas quis. </p>
        <br>
    </section>

    <footer class="footer py-4 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-lg-left text-center contac">
                    <h3 class="contac"><a href="#">Contáctenos</a></h3>
                </div>
                <div class="col-lg-6 text-lg-center text-center">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo-blan.png" alt="" style="width: 60%;">
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