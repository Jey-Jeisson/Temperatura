<?php include ("db.php")?>
<?php include ("includes/header.php") ?>
<div class = "container p-4">
    <div class = "row">
        <div class = "col-md-4">
            <?php if(isset($_SESSION['mesaje'])) {?>
              <div class = "alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role = "alert">
                <?= $_SESSION['message']?>
                    <button type = "button" class = "close" data_dismiss = "alert" aria-label = "close">
                        <span aria-hidden = "true">&times;</span>
                    </button>
              </div>
            <?php session_unset(); } ?>
            <div class = "card card-body">
                <form action="save_task.php" method = "POST">
                    <div class = "form-group">
                        <input type = "text" name = "Nombre" class = "form-control"
                        plaseholder = "Nombre" autofocus>
                    </div>

                    <div class = "form-group">
                        <textarea name = "temperatura" class ="form-control"
                        plaseholder = "temperatura"></textarea>
                    </div>

                    <input type="submit" class = "btn btn-success btn-block"
                    name = "save_task" value = "Guardar">
                </form>
            </div>
        </div>

        <div class = "col-m-8">
            <table class = "table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Temperatura</th>
                        <th>Fecha</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
            
                <tbody>
                    <?php
                    $query = "SELECT * FROM contol";
                    $result_tasks = mysqli_query($conn, $query)

                    while($row = mysqli_fetch_array($result_tasks)) {?>
                        <tr>
                            <td><?php echo $row ['ID']?></td>
                            <td><?php echo $row ['Nombre']?></td>
                            <td><?php echo $row ['Temperatura']?></td>
                            <td><?php echo $row ['Fecha']?></td>

                            <td>
                                <a href = "delete_task.php?id=<?php echo $row ['ID']?>" class = "btn btn-danger">
                                    <i class = "far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include ("incluye/footer.php") ?>