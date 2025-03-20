<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Registro</title>
</head>
<body>
    <form action="bases.php" method="post">
                <fieldset>
                    <legend>Nuevo Registro:</legend>
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
                <button type="submit">Calcular</button>
            </form>
            <form action="area.php" method="post">
                <fieldset>
                    <legend>Arista del triangulo:</legend>
                    <div>
                        <label>Ingrese la base del triangulo</label>
                        <input type="number" name="base" min="0">
                        <label>Ingrese la altura del triangulo</label>
                        <input type="number" name="altura" min="0">
                    </div>
                </fieldset>
                <button type="submit">Enviar</button>
            </form>
            <a href="index.php">Volver</a>
</body>
</html>