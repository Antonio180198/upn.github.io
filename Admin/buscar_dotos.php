<?php
    include("conexion_Ad.php");

    $search_criteria = $_POST['search_criteria'];

    //cadena de consulta
    $query = "SELECT nombre, A_paterno, A_materno, email FROM alumnos WHERE nombre LIKE '%".$search_criteria."%'
    or A_paterno LIKE '%".$search_criteria."%' A_materno LIKE '%".$search_criteria."%' ";

    $authors = [];
    $errors = ['data' => false];


    $getalumno = $conexion -> query($query);


    if ($getalumno-> num_rows > 0) {
        while ($data = $getalumno->fetch_assoc()){
            $authors[] =$data;
        }
        echo json_encode ($authors);
    } else {
        echo json_encode ($errors);
    }
?>