<?php
    include "bases.php";
    $sqlSelect ="insert into personas (nombre, email, edad) values ";
    $sqlSelect .= "('nombre', 'email', 'edad')";
    $resultadosSQL = $conexDB->query($sqlSelect);
if(empty($resultadosSQL)==false){
    echo "<br> Guardado exitosamente <br>";
}else{
    echo "<br>No fue posible guardar la informacion<br>";

}?>
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