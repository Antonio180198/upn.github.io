<?php
session_start();
include("conexion_Ad.php");

$id = $_GET['id'];
$usuarios = "SELECT * FROM alumnos where id_usuario = '$id'";

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_edit.css">

    <title>Document</title>
</head>
<body>
    <form action="Actualizar.php" method="post">
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
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>contraseña</th>
                        
                    </tr>
                    </thead>
                    <?php
                        
                        $result=mysqli_query($conexion,$usuarios);
                        while ($mostrar=mysqli_fetch_assoc($result)){
                    ?>

                    <tbody>
                    <tr>
                        <input type="hidden" value=" <?php echo $mostrar['id_usuario']?>"   name="id"  >              
                        <td><input type="text" value=" <?php echo $mostrar['nombre']?>"       name="nombres"  >         </td><br> 
                        <td><input type="text" value=" <?php echo $mostrar['A_paterno']?>"    name="A_Paterno"  ></td>
                        <td><input type="text" value=" <?php echo $mostrar['A_materno']?>"    name="A_Materno"  ></td>
                        <td><input type="text" value=" <?php echo $mostrar['titulo_curso']?>" name="titulo_curso"  >           </td>
                        <td><input type="text" value=" <?php echo $mostrar['horas_t']?>"      name="Horas_t"  >         </td>
                        <td><input type="text" value=" <?php echo $mostrar['F_inicial']?>"    name="F_inicial"  >        </td>
                        <td><input type="text" value=" <?php echo $mostrar['F_final']?>"      name="F_final"  >     </td>
                        <td><input type="text" value=" <?php echo $mostrar['email']?>"        name="Email"  >           </td>
                        <td><input type="text" value=" <?php echo $mostrar['tel']?>"          name="Tel"  >    </td> 
                        <td><input type="text" value=" <?php echo $mostrar['password']?>"     name="Password"  >           </td> 

                    </tr>
                    <?php
                        } mysqli_free_result($result);
                    ?>
                    <input type="submit" value="Actualizar">
                    </tbody>
                </table>
            </div>
            </form>
</body>
</html>