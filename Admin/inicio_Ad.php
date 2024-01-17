<?php
session_start();
include("conexion_Ad.php");
$usuarios = "SELECT * FROM alumnos";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="estilo_Ad_ini.css">
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
            <a href="controlador_Ad_CerrarSecion.php" class="menuItem">Salir</a>
            <a href="#" class="menuItem">Portfolio</a>
            <a href="#" class="menuItem"><i class="fab fa-github"></i> GitHub</a>
            <a href="#" class="menuItem"><i class="fab fa-discord"></i> Discord</a>
            
        </div>
    </div>
    /*buscador*/
    <div class="input-container">
    
        <input type="search" class="form-control" id="search"  placeholder="Buscar">

    </div>
    <div class="errors-container"> <p></p> </div>


    <div class="results-container" style="display: none;" id="resultsContainer">
                <table id="results" >
                    <thead>
                    
                        <th>id</th>
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Curso</th>
                        <th>Horas</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha concluida</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Operación</th>
                    
                    </thead>
                    <?php
                        $result=mysqli_query($conexion,$usuarios);

                        while ($mostrar=mysqli_fetch_assoc($result)){
                    ?>

                    <tbody>
                    <tr>
                        <td><?php echo $mostrar['id_usuario']?></td>
                        <td><?php echo $mostrar['nombre']?></td>
                        <td><?php echo $mostrar['A_paterno']?></td>
                        <td><?php echo $mostrar['A_materno']?></td>
                        <td><?php echo $mostrar['titulo_curso']?></td>
                        <td><?php echo $mostrar['horas_t']?></td>
                        <td><?php echo $mostrar['F_inicial']?></td>
                        <td><?php echo $mostrar['F_final']?></td>
                        <td><?php echo $mostrar['email']?></td>
                        <td><?php echo $mostrar['tel']?></td> 
                        <td>
                            <a href="Editar.php?id=<?php echo $mostrar['id_usuario']?>" class="">Editar</a>
                            <a href="Eliminar.php?id=<?php echo $mostrar['id_usuario']?>" class="delete">Eliminar</a>
                        </td>

                    </tr>
                    <?php
                        } mysqli_free_result($result);
                    ?>
                    </tbody>
                </table>
    </div>
    <script src="confirmacion.js"></script>
    <script src="busc.js"></script>

    

</body>
</html>