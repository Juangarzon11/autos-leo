<?php
    require "../../conexion.php";
    session_start();
    if(!isset($_SESSION['rol'])){
        header( 'location:'.$URL.'vistas/login/login.php');
    }else{
        if($_SESSION['rol'] !=1 ){
            header( 'location:'.$URL.'vistas/login/login.php');
        }
    }
    
    /*if ($conn->connect_error) {
        die("Conección exitosa: " . $conn->connect_error);
    } */

    $cantidad=$_POST['cantidad'];
    $descripcion=$_POST['descripcion'];
    $valoru=$_POST['valorunitario'];
    $proveedor=$_POST['proveedor'];


/*  datos para guardar la imagen y moverla a la carpeta*/
    $hoy = date("YmdHis");
    $type=$_FILES['imagen']['type'];
    $tmp_name = $_FILES['imagen']["tmp_name"];
    $name =$_FILES['imagen']["name"];
    $name=$hoy.$name;
    $img1="../../images/".$name;
    

    $sql="INSERT INTO tblInsumo_Repuesto (Cantidad, Descripcion, Vlr_Unitario, Id_Proveedor, imagen) VALUES ('$cantidad', '$descripcion', '$valoru', '$proveedor', '$name')";
    if ($conn->query($sql) === FALSE) {
        echo "<script> 	location.href='form_Insumo.php?msg=2'; </script>";
    } else {
        move_uploaded_file($tmp_name,$img1);
        echo "<script> 	location.href='form_Insumo.php?msg=1'; </script>";
    }



?>