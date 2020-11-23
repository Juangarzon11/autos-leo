<?php
    require "../../conexion.php";
    
    if ($conn->connect_error) {
        die("Conección exitosa: " . $conn->connect_error);
    }

    $rut=$_POST['rut'];
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $direccion=$_POST['direccion'];
    $servicio=$_POST['servicio'];
    $contrasena=$_POST['contra1'];

    $sql=$conn->query("INSERT INTO `tblproveedores`(`Id_Proveedor`, `Nombre`, `Descripcion`, `Direccion`, `Telefono`, `Correo`) VALUES ('$rut', '$nombre', '$descripcion', '$direccion', '$telefono', '$correo')");
    if($sql==TRUE){
        $sql2=$conn->query("INSERT INTO tblproveedores_servicios(Id_Proveedor, Id_Servicio) VALUES ('$rut', '$servicio')");

    }else{
        echo "<script> alert('ERROR1'); </script>";
    }
    
?>