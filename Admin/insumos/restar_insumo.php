<?php

require  "../../conexion.php";
/* session_start();
if(!isset($_SESSION['rol'])){
        header( 'location:'.$URL.'vistas/login/login.php');
    }else{
        if($_SESSION['rol'] !=1 ){
            header( 'location:'.$URL.'vistas/login/login.php');
        }
    } */

$Id_Insumo= $_GET['Id_Insumo'];
$cantidad= $_POST['cantidad'];

$sel = $conn -> query("SELECT * FROM tblinsumo_repuesto WHERE Id_Insumo='$Id_Insumo'");

while ($row=$sel->fetch_array()){
    echo $row[1];
    $cant=$row[1];
}

$cf=($cant)-($cantidad);
$sql = $conn ->query("UPDATE tblinsumo_repuesto SET Cantidad='$cf' WHERE Id_Insumo='$Id_Insumo'");

if ($sql) {
    echo "<script> 	location.href='form_insumo.php?msg=3'; </script>";
}else{
    echo "<script> 	location.href='form_insumo.php?msg=4'; </script>";
}


?>