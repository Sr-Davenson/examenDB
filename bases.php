<?php
$hostDB = "localhost"; //ruta
$userDB = "root"; //usuario
$pwdDB = ""; //contraseña
$nameDB = "examen_pr2"; //nombreBaseDeDatos
// $portDB = "3306"; //puertoBase
$conexDB = new mysqli($hostDB, $userDB, $pwdDB,$nameDB);
if($conexDB->connect_error){
    echo $conexDB->connect_error;
    die();
}

// echo "Conexión exitosa <br><br>";

// $sqlSelect = "select * from estudiantes";
// $resultadosSQL = $conexDB->query($sqlSelect);

// if($resultadosSQL->num_rows>0){
//     while ($row = $resultadosSQL->fetch_assoc()) {
//         $id = $row['id'];
//         $nombre = $row['nombre'];
//         $cod = $row['codigo'];
//         $email = $row['email'];
//         echo "$id, $nombre, $cod, $email <br>";
//     }
// } else {
//     echo "<br>No hay registros :(<br>";
// }

// $sqlSelect ="insert into estudiantes (codigo, nombre, email) values ";
// $sqlSelect .= "(23555, 'Maria', 'maria@test.com')";

// $resultadosSQL = $conexDB->query($sqlSelect);
// if($resultadosSQL){
//     echo "<br>Datos guardados :D<br>";
// }else{
//     echo "<br>No fue posible guardar la informacion<br>";

// }