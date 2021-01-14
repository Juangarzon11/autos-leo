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

    $tiposervicio=$_POST['tiposervicio'];
    $descripcion=$_POST['descripcion'];
    $valor=$_POST['valor'];
    $proveedor=$_POST['proveedor'];

    $sql="INSERT INTO tblservicios_ofertados (Tipo_Servicio, Descripcion, Valor, Id_Proveedor) VALUES ('$tiposervicio', '$descripcion', '$valor', '$proveedor')";
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>". $conn->error;
        /* echo "<script> 	location.href='form_servicio.php?msg=2'; </script>"; */
    } else {
        echo "<script> 	location.href='form_servicio.php?msg=1'; </script>";
    }
?>