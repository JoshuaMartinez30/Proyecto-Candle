<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="styles_login.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar sesión</h2>
        <form action="Validacion_login.php" method="post"> 
            <div class="input-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Iniciar sesión</button>
            <a href="Registro.php"><p><u>Crear cuenta</u></p></a>
        </form>
    </div>
</body>
</html>

