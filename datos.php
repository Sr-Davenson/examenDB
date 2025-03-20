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
        $sqlSelect = "select * from personas";
        $mensaje = '';
        $resultadosSQL = $conexDB->query($sqlSelect);
            if($resultadosSQL->num_rows>0){
                while ($row = $resultadosSQL->fetch_assoc()) {
                    $nombre = $row['nombre'];
                    $email = $row['email'];
                    $edad = $row['edad'];
                    echo"$nombre, $email, $edad <br>";
                    // $mensaje = "$nombre, $email, $edad <br>";
                }
            } else {
                echo "<br>No hay registros :(<br>";
            }
        ?>
        <a href="index.php">Volver</a>
</body>
</html>