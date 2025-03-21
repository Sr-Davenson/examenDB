
<?php
    $nombreDB = $_POST['nombreDB'];
    $emailDB = $_POST['emailDB'];
    $edadDB = $_POST['edadDB'];

    include "bases.php";

    $sql = "INSERT INTO personas (nombre, email, edad) VALUES (?, ?, ?)";
    $sqlRespuesta = $conexDB->prepare($sql);

    if ($sqlRespuesta) {
        $sqlRespuesta->bind_param("ssi", $nombreDB, $emailDB, $edadDB);
        if ($sqlRespuesta->execute()) {
            echo "<br> Guardado exitosamente <br>";
        } else {
            echo "<br>No fue posible guardar la información: " . $stmt->error . "<br>";
        }
        $sqlRespuesta->close();
    } else {
        echo "<br>Error al preparar la declaración SQL: " . $conexDB->error . "<br>";
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
