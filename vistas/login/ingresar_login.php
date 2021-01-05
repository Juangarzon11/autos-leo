<?php
    require_once "../../conexion.php";

    session_start();

    $Usuario = $_POST['correo'];
    $Contraseña = $_POST['password'];
    //$Contraseña=hash("sha256", $Contraseña); QUITAR EL COMENTARIO CUANDO EL LOGIN ESTÉ LISTO

    $sel = $conn->query("SELECT * FROM tblusuario WHERE Username='$Usuario' AND Password='$Contraseña'");

    $row = mysqli_fetch_array($sel);

    if ($row==TRUE) {
        if($row[4]==1){
            $_SESSION['Correo']=$row[1];
            $_SESSION['rol']=$row[4];
            echo "<script> location.href='../../Admin/insumos/ingresar_insumo.php'; </script>";
        }
    }else{
        echo "<script> location.href='login.php?msg=2'; </script>";
    }
?>