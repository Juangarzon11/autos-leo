<?php
    require  "../../conexion.php";
    /* session_start();
    if($_SESSION['rol']!=1){
        echo "<script> location.href='../../index.php'; </script>";
    } */
    
    $Id_Proveedor= $_GET['Id_Proveedor'];

    $del1 = $conn -> query("DELETE FROM tblinsumo_repuesto WHERE Id_Proveedor='$Id_Proveedor'");

    $del = $conn -> query("DELETE FROM tblproveedores WHERE Id_Proveedor='$Id_Proveedor'");

    if ($del) {
        echo "<script> 	location.href='form_proveedor.php?msg=5'; </script>";
    }else{
        echo "Error: " . $del . "<br>". $conn->error;
        echo "<script> 	location.href='form_proveedor.php?msg=6'; </script>";
    }
?>