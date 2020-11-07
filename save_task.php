<?php

include("db.php");

if(isset($_POST['save_task'])){
    $nombre = $_POST['Nombre'];
    $temperatura = $_POST['Temperatura'];
    echo $nombre;
    echo $temperatura;

    $query = "INSERT INTO control(Nombre, Temperatura) VALUES('$nombre', '$temperatura')";
    $result = mysquli_query($conn, $query);
    if(!$result){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Guardado Exitosamente';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>