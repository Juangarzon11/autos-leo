<?php
    require "../../conexion.php";
    if(!isset($_SESSION['rol'])){
        header( 'location:'.$URL.'vistas/login/login.php');
    }else{
        if($_SESSION['rol'] !=1 ){
            header( 'location:'.$URL.'vistas/login/login.php');
        }
    }
    
    if ($conn->connect_error) {
        die("Conección exitosa: " . $conn->connect_error);
    }

    //parametros para guardar la imagen
    $hoy = date("YmdHis");
    //$nombreimg=$_POST['name_img'];

    $type=$_FILES['img1']['type'];
    $tmp_name = $_FILES['img1']["tmp_name"];
    $name =$_FILES['img1']["name"];
    $name=$hoy.$name;
    $img1="../../images/".$name;
    move_uploaded_file($tmp_name,$img1);




    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $direccion=$_POST['direccion'];
    $tel=$_POST['tel'];
    $corr=$_POST['corr'];
    $lat=$_POST['lat'];
    $long=$_POST['long'];

    $sql="INSERT INTO tblproveedores (Id_Proveedor, Nombre, Descripcion, Direccion, Telefono, Correo, Latitud, Longitud, imagen) VALUES ('$id', '$nombre', '$descripcion', '$direccion', '$tel', '$corr', '$lat', '$long', '$name')";
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>". $conn->error;
        /* echo "<script> 	location.href='form_proveedor.php?msg=2'; </script>"; */
    } else {
        echo "<script> 	location.href='form_proveedor.php?msg=1'; </script>";
    }



?>