<head>
    <link rel="stylesheet" type="text/css" href="estilo_Ad.css">
</head>
<?php
session_start();

if(!empty($_POST["btningresar"])) {
    if (empty($_POST["id_usuario"]) and empty($_POST["password"])) {
        echo '<div class="shake-horizontal"> Los campos estan vacios </div>'; 
    }else{
        $usuario = $_POST["usuario"];
        $clave = $_POST["password"];
        $sql=$conexion->query("SELECT * FROM administrador WHERE id_usuario = '$usuario' AND password = '$clave' ");
        if($datos=$sql->fetch_object ()){
            $_SESSION["id"] =$datos-> id_usuario;
            $_SESSION["nombre"] =$datos-> nombres;
            $_SESSION["apellido_p"] =$datos-> A_paterno;
            $_SESSION["apellido_m"] =$datos-> A_materno;
            header("Location:inicio_Ad.php");
        } else {
            echo '<div class="shake-horizontal">Usuario o contraseña incorrectos</div>';   
        }         
    }

    
}

?>  