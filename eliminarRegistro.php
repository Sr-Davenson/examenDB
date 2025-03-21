<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar</title>
</head>
<body>
    <form action="eliminar.php" method="post">
                    <fieldset>
                        <legend>Eliminar Registro:</legend>
                        <div>
                            <p>Ingresa el nombre de la persona que quieres eliminar de la base de datos</p>
                            <label>Nombre:</label>
                            <input type="text" name="nombre" placeholder="Ingresa tu nombre" require>
                    </fieldset>
                    <button type="submit">Enviar</button>
                </form>
    <a href="index.php">Volver</a>
</body>
</html>