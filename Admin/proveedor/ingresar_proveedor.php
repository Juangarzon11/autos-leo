<?php
    require "../../conexion.php";
    /* session_start();
    if($_SESSION['rol']!=1){
        echo "<script> location.href='../../index.php'; </script>";
    } */
    
    if ($conn->connect_error) {
        die("Conección exitosa: " . $conn->connect_error);
    }

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $direccion=$_POST['direccion'];
    $tel=$_POST['tel'];
    $corr=$_POST['corr'];
    $lat=$_POST['lat'];
    $long=$_POST['long'];

    $sql="INSERT INTO tblproveedores (Id_Proveedor, Nombre, Descripcion, Direccion, Telefono, Correo, Latitud, Longitud) VALUES ('$id', '$nombre', '$descripcion', '$direccion', '$tel', '$corr', '$lat', '$long')";
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>". $conn->error;
        /* echo "<script> 	location.href='form_proveedor.php?msg=2'; </script>"; */
    } else {
        echo "<script> 	location.href='form_proveedor.php?msg=1'; </script>";
    }



?>