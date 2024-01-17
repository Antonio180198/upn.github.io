<?php
session_start();
include("conexion_Pro.php");
$usuarios = "SELECT * FROM alumnos";

?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="estilo_Pro_ini.css">
        <title>UPN</title>
    </head>
    <body>
    <div class="topbar">
        <div class="brand">Bienvenido:
        <?php
                echo $_SESSION["nombre"]." ".$_SESSION["apellido_p"]." ".$_SESSION["apellido_m"];
        ?>
        </div>
        <div class="menu">
            <a href="controlador_Pro_CerrarSecion.php" class="menuItem">Salir</a>
            <a href="#" class="menuItem">Portfolio</a>
            <a href="#" class="menuItem"><i class="fab fa-github"></i> GitHub</a>
            <a href="#" class="menuItem"><i class="fab fa-discord"></i> Discord</a>
            <button class="ctaButton">Contact Us</button>
        </div>
    </div>
        <nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-light bg-light fixed-top">
            
        

            <div>
                <input onkeyup="buscar_ahora($('#buscar_1').val());" type="text" class="form-control" id="buscar_1" name="buscar_1" placeholder="Buscar">

                <div class="card col-12 mt-5">
                    <div class="card-body">
                        <div id="datos_buscador" class="container pl-5 pr-5"></div>
                    </div>
                </div>
            </div>


            <div class="tabla">
                <table id="tabla" class="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Operación</th>

                        
                    </tr>
                    </thead>
                    <?php
                        $result=mysqli_query($conexion,$usuarios);
                        
                        while ($mostrar=mysqli_fetch_assoc($result)){
                    ?>

                    
                    <tbody>
                    <tr>
                        <td class="buscar"><?php echo $mostrar['id_usuario']?></td>
                        <td class="buscar"><?php echo $mostrar['nombre']?></td>
                        <td class="buscar"><?php echo $mostrar['A_paterno']?></td>
                        <td class="buscar"><?php echo $mostrar['A_materno']?></td>

                        <td><?php echo $mostrar['email']?></td>
                        <td><?php echo $mostrar['tel']?></td> 
                        <td>
                            <a href="calif-alu_Pro.php?id=<?php echo $mostrar['id_usuario']?>" class="">calificar</a>
                            
                        </td>

                    </tr>
                    <?php
                        }mysqli_free_result($result);
                        
                    ?>
                    </tbody>
                </table>
            </div>
              
        </nav>
    <script src="buscador.js"></script>
    <script src="buscar.js"></script>


    </body>

    <script type="text/javascript">
        function buscar_ahora(buscar) {
            var parametros ={"buscar" :buscar};
            $.ajax({
                data:parametros,
                type: "POST",
                url: 'buscador.php',
                success: function(data) {
                    document.getElementById("datos_buscador").innerHTML = data;
                }
            });
        }
    </script>
</html>