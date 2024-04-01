<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "qEeKLgpIkdarsoNT";
$dbname = "sistemadecora_candle";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$password = $_POST['password'];

// Preparar la consulta SQL para insertar los datos en la tabla Usuarios
$sql = "INSERT INTO Usuarios (nombre, apellido, direccion, fecha_nacimiento, telefono, email, password) VALUES ('$nombre', '$apellido', '$direccion', '$fecha_nacimiento', '$telefono', '$email', '$password')";


// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
    echo "<script>window.location.href = 'Login.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
