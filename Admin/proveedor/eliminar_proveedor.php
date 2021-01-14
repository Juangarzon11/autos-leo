<?php
    require  "../../conexion.php";
    session_start();
    if(!isset($_SESSION['rol'])){
        header( 'location:'.$URL.'vistas/login/login.php');
    }else{
        if($_SESSION['rol'] !=1 ){
            header( 'location:'.$URL.'vistas/login/login.php');
        }
    }
    
    $Id_Proveedor= $_GET['Id_Proveedor'];

    $del1 = $conn -> query("DELETE FROM tblinsumo_repuesto WHERE Id_Proveedor='$Id_Proveedor'");

    $del2 = $conn -> query("DELETE FROM tblservicios_ofertados WHERE Id_Proveedor='$Id_Proveedor'");

    $del = $conn -> query("DELETE FROM tblproveedores WHERE Id_Proveedor='$Id_Proveedor'");

    if ($del) {
        unlink("../../images/$img");//acá le damos la direccion exacta
        echo "<script> 	location.href='form_proveedor.php?msg=5'; </script>";
    }else{
        echo "Error: " . $del . "<br>". $conn->error;
        echo "<script> 	location.href='form_proveedor.php?msg=6'; </script>";
    }
?>