
# Empresa DEV - Soluciones Innovadoras

Bienvenido a **Empresa DEV**, una plataforma diseñada para ofrecer soluciones digitales innovadoras. Esta aplicación web permite gestionar usuarios a través de un sistema de autenticación con roles de administrador y usuario.

## Descripción de la Aplicación

La aplicación cuenta con un **dashboard** que permite a los administradores gestionar usuarios de manera efectiva. Las principales funcionalidades del dashboard incluyen:

- **Visualización de Usuarios**: Los administradores pueden ver una lista de todos los usuarios registrados en la plataforma, con detalles como nombre de usuario, correo electrónico y rol.
- **Agregar Usuarios**: Se puede añadir nuevos usuarios mediante un formulario que solicita información básica.
- **Editar Usuarios**: Los administradores pueden modificar los detalles de los usuarios existentes, como nombre, correo electrónico y rol.
- **Eliminar Usuarios**: También tienen la opción de eliminar usuarios de la base de datos.
- **Interfaz Intuitiva**: El diseño es responsivo y fácil de usar, asegurando que la administración se realice sin complicaciones.

## Estructura del Proyecto

```
.
├── config
│   └── database.php       # Configuración de la base de datos
├── dashboard.php           # Panel de control para administradores
├── index.php              # Página principal
├── js
│   └── dashboard.js       # Scripts para funcionalidades del dashboard
├── login.php              # Página de inicio de sesión
├── new.php                # Página para resetear las creadenciales del admin
├── register.php           # Página de registro
├── sql
│   └── init.sql          # Script para inicializar la base de datos
└── src
    └── User.php          # Clase para gestionar usuarios
```

## Instalación

1. Clona este repositorio.
2. Importa el archivo `sql/init.sql` en tu base de datos MySQL.
3. Configura tu conexión a la base de datos en `config/database.php`.
4. Asegúrate de que el servidor Apache y PHP están corriendo.
5. Accede a `index.php` en tu navegador.

