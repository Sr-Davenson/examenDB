<?php
    include "bases.php";
    $sqlSelect ="DELETE FROM personas WHERE nombre ='nombre'";
    $sqlSelect .= "('nombre')";
    $resultadosSQL = $conexDB->query($sqlSelect);
if(empty($resultadosSQL)==true){
    echo "<br> Eliminado exitosamente <br>";
}else{
    echo "<br>No fue posible Eliminar la informacion<br>";

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