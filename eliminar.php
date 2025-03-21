<?php
    include "bases.php";

    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];

        // Uso de declaración preparada para evitar inyección SQL
        $sql = "DELETE FROM personas WHERE nombre = ?";
        $stmt = $conexDB->prepare($sql);

        if ($stmt) {
            // Vinculamos el parámetro
            $stmt->bind_param("s", $nombre); // Tipo string
            if ($stmt->execute()) {
                echo "<br> Eliminado exitosamente <br>";
            } else {
                echo "<br>No fue posible eliminar la información: " . $stmt->error . "<br>";
            }
            $stmt->close();
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
    <a href="index.php">Ir a Inicio</a>
</body>
</html>