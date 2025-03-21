<?php
    $nombreDB = $_POST['nombreDB'];
    $emailDB = $_POST['emailDB'];
    $edadDB = $_POST['edadDB'];
    include "bases.php";


    // $sqlSelect ="insert into personas ($nombre=nombre, $email=email,$edad= edad) values ";
    $sqlSelect ="insert into personas (nombre, email, edad) values ";
    $sqlSelect .= "($nombreDB, $emailDB, $edadDB)";
    $resultadosSQL = $conexDB->query($sqlSelect);
    if($resultadosSQL){
        echo "<br> Guardado exitosamente <br>";
        $resultadosSQL->close();
    }else{
        echo "<br>No fue posible guardar la informacion<br>";

    }
    ?>
    
    <?php
    include "bases.php";

    $sql = "INSERT INTO personas (nombre, email, edad) VALUES (?, ?, ?)";
    $stmt = $conexDB->prepare($sql);

    if ($stmt) {
        // Vinculamos los parámetros
        $stmt->bind_param("ssi", $nombreDB, $emailDB, $edadDB); 
        if ($stmt->execute()) {
            echo "<br> Guardado exitosamente <br>";
        } else {
            echo "<br>No fue posible guardar la información: " . $stmt->error . "<br>";
        }
        $stmt->close();
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
