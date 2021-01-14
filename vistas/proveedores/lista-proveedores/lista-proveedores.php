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
    $sel = $conn->query("SELECT * FROM tblproveedores WHERE Id_Proveedor = $_GET[pro]");
    $fila=$sel->fetch_assoc();

    $sel2 = $conn->query("SELECT * FROM tblinsumo_repuesto WHERE Id_Proveedor = $_GET[pro]");

    $sel3 = $conn->query("SELECT * FROM tblservicios_ofertados WHERE Id_Proveedor = $_GET[pro]");
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
    

    <section class="bg-proveedor mb-3">
        <img src="../../../images/<?php echo $fila['imagen']?>" alt="">
        <h1> <?php echo $fila['Nombre']?></h1>
    </section>

</div>
    <div class="container">
        <h2>Productos</h2>
        <div class="row2">
            <?php
            while($fila2=$sel2->fetch_assoc()){
            ?>
            <div class="card col-auto m-3" style="width: 18rem;">
                <img class="card-img-top" src="../../../img/bg-01.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title text-center"><?php echo $fila2['Descripcion']?></h3>
                </div>
                <ul class="list-group list-group-flush text-center precio-productos">
                    <li class="list-group-item"><i class="fas fa-tag"></i> $<?php echo $fila2['Vlr_Unitario']?></li>
                </ul>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <div class="container">
        <h2>Servicios</h2>
        <div class="row2">
        <table class="table table-hover">
                    <thead class="thead">
                        <th>Tipo de servicio</th>
                        <th>Descripción</th>
                        <th>Valor</th>
                    </thead>
                    <?php
                        $cont=0;
                        while ($fila3 = $sel3 -> fetch_assoc()) {
                            $cont++;
                        ?>
                    <tr>
                        <td>
                            <?php echo $fila3['Tipo_Servicio'] ?>
                        </td>
                        <td>
                            <?php echo $fila3['Descripcion'] ?>
                        </td>
                        <td>
                            <?php echo $fila3['Valor'] ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
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