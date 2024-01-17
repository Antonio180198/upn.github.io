<!Doctype html>
    <html lang="en">
     
<head>
    <title>UPN</title>
    <link rel="stylesheet" type="text/css" href="estilo_Pro.css">
</head>

<body>

    <div class="container">
        <div class="login">
        <a class="marker" href="../Index.html">Home</a>
        
        
        <form method="post" action=""> 

            <img src="../images/283px-Logo_Upn_Oficial.svg.png" alt="" class="container-icono">
               
                    <?php
                    include("conexion_Pro.php");
                    include("controlador_Pro.php");
                    ?>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>ID_Asesor</h5>
                    <input id="usuario" type="text" class="text" name="usuario">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Contraseña</h5>
                    <input type="password" id="input" class="text" name="password">
                </div>
            </div>
            <div class="view">
                <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>

            <div class="text-center">
                <a class="font-italic isai5" href="">Olvide mi contraseña</a>
            </div>
            <input name="btningresar" class="signin" type="submit" value="INICIAR SESION">
    
        </form>
        </div>
    </div>

</body>
</html>