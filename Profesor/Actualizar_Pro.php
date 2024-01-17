<?php
include("conexion_Pro.php");


$id= $_POST['id'];

$Horas_t= $_POST['Horas_t'];
$F_inicial= $_POST['F_inicial'];
$F_final= $_POST['F_final'];
$calif= $_POST['calif'];



$actualizar = "UPDATE alumnos SET horas_t='$Horas_t', F_inicial='$F_inicial', 
    F_final='$F_final',  calificacion='$calif'  WHERE id_usuario='$id'";


$resultado = mysqli_query($conexion, $actualizar);

if($resultado){
    echo "<script> alert('¡Cambio realizado! Presione ACEPTAR para continuar.'); window.history.go(-1); </script>";
}else{
    echo "<script> alert('¡Ocurrió un error! Presione ACEPTAR para continuar'); window.history.go(-1); </script>";
}
?>