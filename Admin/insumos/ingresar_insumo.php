<?php
    require "../../conexion.php";
    /* session_start();
    if($_SESSION['rol']!=1){
        echo "<script> location.href='../../index.php'; </script>";
    }
    
    if ($conn->connect_error) {
        die("Conección exitosa: " . $conn->connect_error);
    } */

    $cantidad=$_POST['cantidad'];
    $descripcion=$_POST['descripcion'];
    $valoru=$_POST['valorunitario'];
    $proveedor=$_POST['proveedor'];

    $sql="INSERT INTO tblInsumo_Repuesto (Cantidad, Descripcion, Vlr_Unitario, Id_Proveedor) VALUES ('$cantidad', '$descripcion', '$valoru', '$proveedor')";
    if ($conn->query($sql) === FALSE) {
        echo "<script> 	location.href='form_Insumo.php?msg=2'; </script>";
    } else {
        echo "<script> 	location.href='form_Insumo.php?msg=1'; </script>";
    }



?>