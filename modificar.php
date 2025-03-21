
<?php
    if (isset($_POST['nombreDB'], $_POST['nombreNew'], $_POST['emailNew'], $_POST['edadNew'])) {
        $nombreDB = $_POST['nombreDB'];
        $nombreNew = $_POST['nombreNew'];
        $emailNew = $_POST['emailNew'];
        $edadNew = $_POST['edadNew'];
        include "bases.php";

        if (!empty($nombreDB) && !empty($nombreNew) && !empty($emailNew) && !empty($edadNew)) {
            $sql = "UPDATE personas SET nombre = ?, email = ?, edad = ? WHERE nombre = ?";
            $sqlRespuesta = $conexDB->prepare($sql);
            if ($sqlRespuesta) {
                $sqlRespuesta->bind_param("ssis", $nombreNew, $emailNew, $edadNew, $nombreDB);
                if ($sqlRespuesta->execute()) {
                    echo "<br> Actualizado exitosamente <br>";
                } else {
                    echo "<br>No fue posible actualizar la información: " . $sqlRespuesta->error . "<br>";
                }
                $sqlRespuesta->close();
            } else {
                echo "<br>Error al preparar la declaración SQL: " . $conexDB->error . "<br>";
            }
        } else {
            echo "<br>Todos los campos son obligatorios. Por favor, completa el formulario.<br>";
        }
    } else {
        echo "<br>Error: Datos incompletos recibidos del formulario.<br>";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
<a href="nuevoRegistro.php">Llenar nuevo registro</a>
    <a href="modificarRegistro.php">Modificar un registro</a>
    <a href="eliminarRegistro.php">Eliminar un registro</a>
    <a href="datos.php">Mostrar lista de los registros</a>
    <a href="index.php">Ir a Inicio</a>
</body>
</html>