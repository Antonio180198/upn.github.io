<?php
include("conexion_Ad.php");


$id= $_POST['id'];
$nombres= $_POST['nombres'];
$A_paterno= $_POST['A_Paterno'];
$A_materno= $_POST['A_Materno'];
$titulo_curso= $_POST['titulo_curso'];
$Horas_t= $_POST['Horas_t'];
$F_inicial= $_POST['F_inicial'];
$F_final= $_POST['F_final'];
$Email= $_POST['Email'];
$tel= $_POST['Tel'];
$clave= $_POST['Password'];


$actualizar = "UPDATE alumnos SET nombre='$nombres', A_Paterno='$A_paterno', A_Materno='$A_materno', 
    titulo_curso='$titulo_curso', horas_t='$Horas_t', F_inicial='$F_inicial', F_final='$F_final', Tel='$tel', 
    email='$Email', Password='$clave' WHERE id_usuario='$id'";


$resultado = mysqli_query($conexion, $actualizar);

if($resultado){
    echo "<script> alert('Se actualizo correctamente, actualice la pagina para cambiar los cambios'); window.history.go(-1); </script>";
}else{
    echo "<script> alert('No se actualizo correctamente, actualice la pagina para cambiar los cambios'); window.history.go(-1); </script>";
}
?>