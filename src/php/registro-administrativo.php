<?php
// Conexión a la base de datos (reemplaza con tus propios valores)
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "bdapphospital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesar el formulario si se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash de la contraseña

    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuarios (cedula, nombre, apellidos, email, telefono, fecha_nacimiento, password) VALUES ('$cedula', '$nombre', '$apellidos', '$email', '$telefono', '$fechaNacimiento', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
