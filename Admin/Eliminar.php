<?php
include("conexion_Ad.php");

    $id = $_GET['id'];
    $eliminar = "DELETE FROM alumnos where id_usuario = '$id'";

    $resultado= mysqli_query($conexion, $eliminar);

    if ($resultado){
        header("Location: inicio_Ad.php");
    }   else{
        echo "<script> alert('No se pudo eliminar correctamente'); window.history.go(-1); </script>";

    }
?>