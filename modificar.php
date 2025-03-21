<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar</title>
</head>
<body>
    <form action="insertar.php" method="post">
                    <fieldset>
                        <legend>Modificar Registro:</legend>
                        <div>
                            <label>Nombre:</label>
                            <input type="text" name="nombre" placeholder="Ingresa tu nombre" require>
                            <br>
                            <label>Email:</label>
                            <input type="email" name="email" placeholder="Ingresa tu correo" require>
                            <br>
                            <label>Edad: </label>
                            <input type="number" name="edad" min="1" placeholder="ingresa tu edad" require>
                        </div>
                    </fieldset>
                    <button type="submit">Enviar</button>
                </form>
    <a href="index.php">Volver</a>
</body>
</html>