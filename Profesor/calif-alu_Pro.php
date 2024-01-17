<?php
session_start();
include("conexion_Pro.php");

$id = $_GET['id'];
$usuarios = "SELECT * FROM alumnos where id_usuario = '$id'";

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
            <a href="inicio_Pro.php" class="menuItem">Salir</a>

            <button class="ctaButton">Contact Us</button>
        </div>
    </div>
        <nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-light bg-light fixed-top">
            
    <form action="Actualizar_Pro.php" method="post">
            
            <div class="tabla">
                <table id="tabla" class="table">
                    <thead>
                    <tr>
                        
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Curso</th>
                        <th>Horas</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha concluida</th>
                        
                        <th>calificacion</th>
                         
                    </tr>
                    </thead>
                    <?php
                        $result=mysqli_query($conexion,$usuarios);
                        while ($mostrar=mysqli_fetch_assoc($result)){
                    ?>

                    <tbody>
                    <tr>
                    <input type="hidden" value=" <?php echo $mostrar['id_usuario']?>"   name="id"  >              
                        <td><?php echo $mostrar['nombre']?></td>
                        <td><?php echo $mostrar['A_paterno']?></td>
                        <td><?php echo $mostrar['A_materno']?></td>
                        <td><?php echo $mostrar['titulo_curso']?>"      </td>
                        <td><input type="text" value=" <?php echo $mostrar['horas_t']?>"      name="Horas_t"  >          </td>
                        <td><input type="date" value=" <?php echo $mostrar['F_inicial']?>"    name="F_inicial"  >        </td>
                        <td><input type="date" value=" <?php echo $mostrar['F_final']?>"      name="F_final"  >          </td>
                        <td><input type="text" value=" <?php echo $mostrar['calificacion']?>" name="calif"  >            </td> 
                        
                        
                        </tr>
                    <?php
                        } mysqli_free_result($result);
                    ?>
                    <input type="submit" value="Actualizar">
                    </tbody>
                </table>
            </div>
    </form>           
        </nav>
    </body>

</html>