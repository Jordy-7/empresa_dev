<?php
session_start();
require_once 'config/database.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

// Manejo de operaciones CRUD
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    switch ($action) {
        case 'create':
            $stmt = $pdo->prepare("INSERT INTO users (username, password, email, full_name, role) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([
                $_POST['username'],
                password_hash($_POST['password'], PASSWORD_DEFAULT),
                $_POST['email'],
                $_POST['full_name'],
                $_POST['role']
            ]);
            break;

        case 'update':
            $stmt = $pdo->prepare("UPDATE users SET username = ?, email = ?, full_name = ?, role = ? WHERE id = ?");
            $stmt->execute([
                $_POST['username'],
                $_POST['email'],
                $_POST['full_name'],
                $_POST['role'],
                $_POST['id']
            ]);
            break;

        case 'delete':
            $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
            $stmt->execute([$_POST['id']]);
            break;
    }

    header('Location: dashboard.php');
    exit;
}

// Obtener todos los usuarios
$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-900 text-white" x-data="{ showModal: false, editUser: {} }">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Admin Dashboard</h1>

        <div class="max-w-md mx-auto mb-8 bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Agregar Usuario</h2>
            <form action="" method="POST">
                <input type="hidden" name="action" value="create">
                <input type="text" name="username" placeholder="Usuario" required class="block w-full mb-4 px-3 py-2 bg-gray-700 rounded focus:outline-none">
                <input type="password" name="password" placeholder="Contraseña" required class="block w-full mb-4 px-3 py-2 bg-gray-700 rounded focus:outline-none">
                <input type="email" name="email" placeholder="Email" required class="block w-full mb-4 px-3 py-2 bg-gray-700 rounded focus:outline-none">
                <input type="text" name="full_name" placeholder="Nombre Completo" required class="block w-full mb-4 px-3 py-2 bg-gray-700 rounded focus:outline-none">
                <select name="role" class="block w-full mb-4 px-3 py-2 bg-gray-700 rounded focus:outline-none">
                    <option value="user">Usuario</option>
                    <option value="admin">Admin</option>
                </select>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Agregar</button>
            </form>
        </div>

        <h2 class="text-2xl font-semibold mb-4">Lista de Usuarios</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-800 rounded-lg">
                <thead>
                    <tr class="bg-gray-700">
                        <th class="p-3 text-left">ID</th>
                        <th class="p-3 text-left">Usuario</th>
                        <th class="p-3 text-left">Email</th>
                        <th class="p-3 text-left">Nombre Completo</th>
                        <th class="p-3 text-left">Rol</th>
                        <th class="p-3 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr class="border-b border-gray-700">
                            <td class="p-3"><?php echo $user['id']; ?></td>
                            <td class="p-3"><?php echo htmlspecialchars($user['username']); ?></td>
                            <td class="p-3"><?php echo htmlspecialchars($user['email']); ?></td>
                            <td class="p-3"><?php echo htmlspecialchars($user['full_name']); ?></td>
                            <td class="p-3"><?php echo htmlspecialchars($user['role']); ?></td>
                            <td class="p-3 flex space-x-2">
                                <button @click="editUser = <?php echo htmlspecialchars(json_encode($user)); ?>; showModal = true" class="bg-blue-600 text-white px-2 py-1 rounded">Editar</button>
                                <form action="" method="POST" class="inline">
                                    <input type="hidden" name="action" value="delete">
                                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                    <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal para editar usuario -->
    <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" @click="showModal = false">
        <div class="bg-gray-800 p-6 rounded-lg w-96" @click.stop>
            <h2 class="text-2xl font-semibold mb-4">Editar Usuario</h2>
            <form action="" method="POST">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" x-bind:value="editUser.id">
                <input type="text" name="username" placeholder="Usuario" required x-bind:value="editUser.username" class="block w-full mb-4 px-3 py-2 bg-gray-700 rounded focus:outline-none">
                <input type="email" name="email" placeholder="Email" required x-bind:value="editUser.email" class="block w-full mb-4 px-3 py-2 bg-gray-700 rounded focus:outline-none">
                <input type="text" name="full_name" placeholder="Nombre Completo" required x-bind:value="editUser.full_name" class="block w-full mb-4 px-3 py-2 bg-gray-700 rounded focus:outline-none">
                <select name="role" class="block w-full mb-4 px-3 py-2 bg-gray-700 rounded focus:outline-none">
                    <option value="user" x-bind:selected="editUser.role === 'user'">Usuario</option>
                    <option value="admin" x-bind:selected="editUser.role === 'admin'">Admin</option>
                </select>
                <div class="flex justify-end">
                    <button type="button" @click="showModal = false" class="bg-gray-600 text-white px-4 py-2 rounded mr-2">Cancelar</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Actualizar</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
