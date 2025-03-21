<?php
function calculo($edad) {
    if ($edad < 18) {
        return "Menor de edad";
    } else {
        return "Mayor de edad";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular</title>
</head>
<body>
    <?php
        include "bases.php";
        $sqlSelect = "SELECT * FROM personas";
        $resultadosSQL = $conexDB->query($sqlSelect);

        if ($resultadosSQL->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Nombre</th><th>Email</th><th>Edad</th><th>Estado</th></tr>";
            while ($row = $resultadosSQL->fetch_assoc()) {
                $nombre = htmlspecialchars($row['nombre']);
                $email = htmlspecialchars($row['email']);
                $edad = htmlspecialchars($row['edad']);
                $estado = calculo($edad); //
                echo "<tr><td>$nombre</td><td>$email</td><td>$edad</td><td>$estado</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No hay registros :(</p>";
        }
    ?>
</body>
</html>
