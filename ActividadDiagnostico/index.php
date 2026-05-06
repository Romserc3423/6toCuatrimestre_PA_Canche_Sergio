<?php
include("connection.php");

if (isset($_POST['enviar'])) {
    $tarea = mysqli_real_escape_string($connection,$_POST['tarea']);

    $sql = "INSERT INTO tareas (descripcion) VALUES ('$tarea')";
    mysqli_query($connection, $sql);
    header("Location: index.php");
    exit();
}

if (isset($_POST['eliminar'])) {
    if (isset($_POST['listado'])) {
        foreach ($_POST['listado'] as $tarea) {
            $tarea = mysqli_real_escape_string($connection, $tarea);
            $sql = "DELETE FROM tareas WHERE descripcion = '$tarea'";
            mysqli_query($connection, $sql);
        }
    }
    header("Location: index.php");
    exit();
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <form action="" method="post">
        <label for="tarea" >Tarea:</label>
        <input type="text" name="tarea" id="tarea" placeholder="Introduce tu tarea" >
        <br>
        <br>
        <button type="submit" name="enviar"> Enviar </button>
    
    <br>
     <ul>
        <?php
        $resultado = mysqli_query($connection, "SELECT * FROM tareas");
        while ($fila = mysqli_fetch_assoc($resultado)){
            echo "<li id='tareas'> 
            <input type='checkbox' name='listado[]' id='listado'  value='".$fila['descripcion']."'
            >".$fila ['descripcion']. "</li>";
        }
        ?>
    </ul>
    <button type="submit" name="eliminar">Eliminar</button>
    </form>
</div>



    <script src="script.js"></script>
</body>
</html>