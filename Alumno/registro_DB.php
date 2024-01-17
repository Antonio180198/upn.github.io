<?php
include("conexion_Alumno.php");

    if (!empty($_POST["Registrar"])){
        if (empty($_POST["nombre"]) or empty($_POST["Apellido_Paterno"]) or empty($_POST["Apellido_Materno"]) or 
            empty($_POST["titulo_curso"]) or empty($_POST["Phone_Number"]) or 
            empty($_POST["email"]) or empty($_POST["password"])){

                echo "<script> alert('¡Los campos estan vacios! Presione ACEPTAR para continuar'); window.history.go(-1); </script>";
        } else{
            $Nombre=$_POST["nombre"];
            $Apellido_Paterno=$_POST["Apellido_Paterno"];
            $Apellido_Materno=$_POST["Apellido_Materno"];
            $Curso=$_POST["titulo_curso"];
            $Phone_Number=$_POST["Phone_Number"];
            $Email=$_POST["email"];
            $Password=$_POST["password"];

            $sql=$conexion->query("insert into alumnos(nombre, A_paterno, A_materno, titulo_curso, tel, email, password) 
            values('$Nombre','$Apellido_Paterno','$Apellido_Materno','$Curso','$Phone_Number','$Email','$Password') ");

            if ($sql==1) {
                echo "<script> alert('¡Usuario Registrado! Presione ACEPTAR para continuar.');  </script>"; 
            }   else {
                echo "<script> alert('¡Usuario No Registrado! Presione ACEPTAR para continuar'); window.history.go(-1); </script>";
            }
        }
    }
?>