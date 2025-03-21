<?php
    include "bases.php";

    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $sql = "DELETE FROM personas WHERE nombre = ?";
        $sqlRespuesta = $conexDB->prepare($sql);

        if ($sqlRespuesta) {
            $sqlRespuesta->bind_param("s", $nombre);
            if ($sqlRespuesta->execute()) {
                echo "<br> Eliminado exitosamente <br>";
            } else {
                echo "<br>No fue posible eliminar la información: " . $sqlRespuesta->error . "<br>";
            }
            $sqlRespuesta->close();
        } else {
            echo "<br>Error al preparar la consulta SQL: " . $conexDB->error . "<br>";
        }
    } else {
        echo "<br>Error: El campo 'nombre' está vacío o no fue enviado.<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="nuevoRegistro.php">Llenar nuevo registro</a>
    <a href="modificarRegistro.php">Modificar un registro</a>
    <a href="eliminarRegistro.php">Eliminar un registro</a>
    <a href="datos.php">Mostrar lista de los registros</a>
    <a href="index.php">Ir a Inicio</a>
</body>
</html>