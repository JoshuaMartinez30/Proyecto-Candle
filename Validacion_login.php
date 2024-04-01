<?php
// Datos de conexión a la base de datos
$host = "localhost";
$usuario = "root";
$password = "qEeKLgpIkdarsoNT";
$base_datos = "sistemadecora_candle";

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $password, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Consulta para verificar el usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
$resultado = $conexion->query($sql);

// Verificar si se encontró un usuario con los datos proporcionados
if ($resultado->num_rows > 0) {
    // Usuario encontrado, permitir el acceso
    echo "¡Bienvenido! Acceso concedido.";
    echo "<script>window.location.href = 'Inicio.php';</script>";
} else {
    // Usuario no encontrado o datos incorrectos, mostrar mensaje de error
    echo "Correo electrónico o contraseña incorrectos.";
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
