<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mensaje";

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario
// Línea 16
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
} else {
    $nombre = '';
}

// Línea 17
if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
}

// Línea 18
if (isset($_POST['mensaje'])) {
    $mensaje = $_POST['mensaje'];
} else {
    $mensaje = '';
}

// Resto de tu código...

// Insertar los datos en la tabla de la base de datos
$sql = "INSERT INTO  mensajes (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    // Redirigir al usuario a una página de éxito
    
    
} else {
    echo "Error al enviar el formulario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();



?>

