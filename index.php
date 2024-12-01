<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Iniciar sesión</title>
</head>
<body>

<div class="form-container">
        <h2>Formulario de Contacto</h2>
        <form method="post">
            <label for="name">usuario:</label>
            <input type="text" id="name" name="name" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="pass" name="pass" require> 

            <input type="submit" value="Enviar" name="registro">
        </form>
 
    <?php
        include("registros.php");
        ?>

</body>
</html>