<?php
    include ("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM control WHERE ID = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Eliminado Exitosamente';
        $_SESSION['message_type'] = 'danger';

        header("Location: index.php");
    }
?>