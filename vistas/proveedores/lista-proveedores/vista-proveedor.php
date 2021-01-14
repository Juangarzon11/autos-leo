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

    $sel = $conn->query("SELECT `tblproveedores`.`Id_Proveedor`, `tblproveedores`.`imagen`, `tblproveedores`.`Nombre`, `tblproveedores`.`Descripcion`
    FROM `tblproveedores`");
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>