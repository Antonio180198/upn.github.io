<?php
    $conexion = new mysqli("localhost","root","", "upn","3306");

    $sql="SELECT * from alumnos";
    $result=mysqli_query($conexion,$sql);

    while ($mostrar=mysqli_fetch_array($result)){}
?>

<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <div>
            <strong>
                
            </strong>
        </div>
    </body>
</html>