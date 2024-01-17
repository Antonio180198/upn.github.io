<head>
    <link rel="stylesheet" type="text/css" href="estilo_Alumno.css">
</head>

<?php
session_start();

if(!empty($_POST["btningresar"])) {
    if (empty($_POST["email"]) and empty($_POST["password"])) {
        echo '<div class="shake-horizontal"> Los campos estan vacios </div>'; 
    }else{
        $correo = $_POST["email"];
        $clave = $_POST["password"];
        $sql=$conexion->query("SELECT * FROM alumnos WHERE email = '$correo' AND password = '$clave' ");
        if($datos=$sql->fetch_object ()){
            $_SESSION["id"] =$datos-> id_usuario;
            $_SESSION["nombre"] =$datos-> nombre;
            $_SESSION["apellido_p"] =$datos-> A_paterno;
            $_SESSION["apellido_m"] =$datos-> A_materno;
            header("Location:inicio_Alumno.php");
        } else {
            echo '<div class="shake-horizontal">Usuario o contraseña incorrectos</div>';   
        }         
    }

    
}

?>  