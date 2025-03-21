<?php
    include "bases.php";
    $sqlSelect ="UPDATE `personas` SET `nombre`='[nombreNew]',`email`='[emailNew]',`edad`='[edadNew]' WHERE 'nombre'='nombre'";
    $sqlSelect .= "('nombreNew', 'emailNew', 'edadNew')";
    $resultadosSQL = $conexDB->query($sqlSelect);
if(empty($resultadosSQL)==true){
    echo "<br> Actualizar exitosamente <br>";
}else{
    echo "<br>No fue posible Actualizar la informacion<br>";

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
    <a href="modificarRegistro.php">Modificar un registro</a>
    <a href="index.php">Ir a Inicio</a>
</body>
</html>