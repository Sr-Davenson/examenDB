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
                            <p>Ingresa el nombre de la persona que quieres modificar la informacion</p>
                            <label>Nombre:</label>
                            <input type="text" name="nombre" placeholder="Ingresa tu nombre" require>
                            <br>
                            <p>A continuacion ingresa los nuevos datos</p>
                            <label>Nombre:</label>
                            <input type="text" name="nombreNew" placeholder="Ingresa tu nombre" require>
                            <br>
                            <label>Email:</label>
                            <input type="email" name="emailNew" placeholder="Ingresa tu correo" require>
                            <br>
                            <label>Edad: </label>
                            <input type="number" name="edadNew" min="1" placeholder="ingresa tu edad" require>
                        </div>
                    </fieldset>
                    <button type="submit">Enviar</button>
                </form>
    <a href="index.php">Volver</a>
</body>
</html>