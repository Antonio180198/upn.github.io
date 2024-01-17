<?php 
include("conexion_Pro.php");

$buscador=mysqli_query("SELECT * FROM alumnos where id_usuario LIKE LOWER('%" .$_POST["buscar"]."%') ");
$numero = mysqli_num_rows($buscador);

?>

<h5 class="card-title">Resultados encontrados (<?php echo $numero; ?>): </h5>

    <?php while ($resultado = mysqli_fetch_assoc($buscador)) { ?>
        <p class="card-text"><?php echo $resultado['id_usuario'];?> - <?php echo $resultado['nombre']?> </p>
    <?php    } ?>
