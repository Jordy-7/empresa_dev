<?php
require_once 'config/database.php';
require_once 'src/User.php';

$user = new User($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fullName = $_POST['full_name'];
    
    if ($user->register($username, $password, $email, $fullName)) {
        $success = "Registro exitoso. Ahora puedes iniciar sesión.";
    } else {
        $error = "El registro falló. Por favor, intenta de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Empresa DEV</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-gray-800 p-8 rounded-lg shadow-md w-96">
            <h2 class="text-2xl font-bold mb-6 text-center">Registrarse</h2>
            <?php if (isset($success)): ?>
                <p class="text-green-500 mb-4"><?php echo $success; ?></p>
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <p class="text-red-500 mb-4"><?php echo $error; ?></p>
            <?php endif; ?>
            <form method="POST" action="">
                <div class="mb-4">
                    <label for="username" class="block mb-2">Usuario:</label>
                    <input type="text" id="username" name="username" required 
                           class="w-full px-3 py-2 bg-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-2">Contraseña:</label>
                    <input type="password" id="password" name="password" required 
                           class="w-full px-3 py-2 bg-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required 
                           class="w-full px-3 py-2 bg-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-6">
                    <label for="full_name" class="block mb-2">Nombre Completo:</label>
                    <input type="text" id="full_name" name="full_name" required 
                           class="w-full px-3 py-2 bg-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition duration-200">
                    Registrarse
                </button>
            </form>
            <p class="mt-4 text-center">
                <a href="login.php" class="text-blue-400 hover:underline">¿Ya tienes una cuenta? Iniciar Sesión</a>
            </p>
        </div>
    </div>
</body>
</html>
