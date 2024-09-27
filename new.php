<?php
// Configura la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empresa_dev";

// Conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Nueva contraseña y usuario
$new_username = 'admin';
$new_password = password_hash('admin', PASSWORD_DEFAULT); // Asegúrate de usar hashing para la contraseña

// Prepara la consulta
$sql = "UPDATE users SET username=?, password=? WHERE role='admin'";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $new_username, $new_password);

if ($stmt->execute()) {
    echo "Usuario y contraseña del administrador actualizados correctamente.";
} else {
    echo "Error al actualizar: " . $stmt->error;
}

// Cierra la conexión
$stmt->close();
$conn->close();
?>
