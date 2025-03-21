<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registros</title>
</head>
<body>
    <h1>Registros</h1>
    <?php
        include "bases.php";
        $sqlSelect = "SELECT * FROM personas";
        $resultadosSQL = $conexDB->query($sqlSelect);

        if ($resultadosSQL->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Nombre</th><th>Email</th><th>Edad</th></tr>";
            while ($row = $resultadosSQL->fetch_assoc()) {
                $nombre = htmlspecialchars($row['nombre']);
                $email = htmlspecialchars($row['email']);
                $edad = htmlspecialchars($row['edad']);
                echo "<tr><td>$nombre</td><td>$email</td><td>$edad</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No hay registros :(</p>";
        }
    ?>
    <a href="index.php">Volver</a>
</body>
</html>
