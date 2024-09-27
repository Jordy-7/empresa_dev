<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa DEV - Soluciones Innovadoras</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .btn {
            transition: all 0.3s;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    <header class="bg-gray-800 shadow-md">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold">Empresa DEV</a>
            <div class="relative">
                <button class="text-gray-300 hover:text-white px-3 py-2">Menú</button>
                <div class="absolute right-0 mt-2 w-48 bg-gray-800 rounded-lg shadow-lg hidden">
                    <a href="login.php" class="block px-4 py-2 hover:bg-gray-700">Iniciar Sesión</a>
                    <a href="register.php" class="block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Registrarse</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-12">
        <section class="text-center mb-12">
            <h1 class="text-5xl font-bold mb-4">Bienvenido a Empresa DEV</h1>
            <p class="text-xl text-gray-400">Soluciones innovadoras para tus necesidades digitales</p>
            <a href="register.php" class="inline-block btn bg-blue-600 text-white px-6 py-3 rounded-lg mt-4">
                Comienza Ahora
            </a>
        </section>

        <section class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-200">
                <h2 class="text-2xl font-bold mb-4">Desarrollo Web</h2>
                <p class="text-gray-400">Sitios web personalizados adaptados a las necesidades de tu negocio.</p>
                <ul class="text-gray-400 mt-2 list-disc list-inside">
                    <li>Diseño Responsivo</li>
                    <li>Optimización SEO</li>
                    <li>Mantenimiento y Soporte</li>
                </ul>
                <a href="#" class="text-blue-400 hover:underline mt-2 block">Saber Más</a>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-200">
                <h2 class="text-2xl font-bold mb-4">Aplicaciones Móviles</h2>
                <p class="text-gray-400">Aplicaciones móviles de vanguardia para iOS y Android.</p>
                <ul class="text-gray-400 mt-2 list-disc list-inside">
                    <li>Diseño Intuitivo</li>
                    <li>Integración de API</li>
                    <li>Desarrollo Multiplataforma</li>
                </ul>
                <a href="#" class="text-blue-400 hover:underline mt-2 block">Saber Más</a>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-200">
                <h2 class="text-2xl font-bold mb-4">Soluciones en la Nube</h2>
                <p class="text-gray-400">Infraestructura en la nube escalable y segura para tus proyectos.</p>
                <ul class="text-gray-400 mt-2 list-disc list-inside">
                    <li>Alojamiento Seguro</li>
                    <li>Escalabilidad Automática</li>
                    <li>Backups Regulares</li>
                </ul>
                <a href="#" class="text-blue-400 hover:underline mt-2 block">Saber Más</a>
            </div>
        </section>

        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Sobre Nosotros</h2>
            <p class="text-gray-400 mb-4">En Empresa DEV, nos esforzamos por ofrecer soluciones digitales de primera calidad que permitan a las empresas prosperar en el entorno digital. Nuestro equipo de expertos trabaja en estrecha colaboración con los clientes para entender sus necesidades únicas y proporcionar soluciones a medida.</p>
            <a href="#" class="inline-block btn bg-blue-600 text-white px-6 py-3 rounded-lg">
                Conoce Más Sobre Nosotros
            </a>
        </section>

        <section class="bg-gray-800 p-6 rounded-lg mb-12">
            <h2 class="text-3xl font-bold text-center mb-4">Lo Que Dicen Nuestros Clientes</h2>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="bg-gray-700 p-4 rounded-lg shadow-md m-2">
                    <p>"Empresa DEV transformó nuestra presencia en línea. ¡Altamente recomendado!"</p>
                    <p class="font-bold">- Jane Doe, CEO de TechCorp</p>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg shadow-md m-2">
                    <p>"El equipo fue profesional y cumplió con los plazos. ¡Un gran socio!"</p>
                    <p class="font-bold">- John Smith, Fundador de InnovateX</p>
                </div>
            </div>
        </section>

        <section class="bg-gray-800 p-6 rounded-lg mb-12">
            <h2 class="text-3xl font-bold text-center mb-4">Preguntas Frecuentes</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="font-bold">¿Qué tipo de servicios ofrecen?</h3>
                    <p class="text-gray-400">Ofrecemos desarrollo web, aplicaciones móviles y soluciones en la nube personalizadas para empresas de todos los tamaños.</p>
                </div>
                <div>
                    <h3 class="font-bold">¿Cómo puedo empezar a trabajar con ustedes?</h3>
                    <p class="text-gray-400">Puedes comenzar contactándonos a través de nuestro formulario de contacto o registrándote en nuestro sitio web.</p>
                </div>
                <div>
                    <h3 class="font-bold">¿Tienen soporte técnico disponible?</h3>
                    <p class="text-gray-400">Sí, ofrecemos soporte técnico continuo y mantenimiento para todos nuestros proyectos.</p>
                </div>
            </div>
        </section>

        <section class="text-center">
            <h2 class="text-3xl font-bold mb-4">¿Listo para Comenzar?</h2>
            <p class="text-gray-400 mb-6">Únete a nosotros hoy y eleva tu negocio con nuestras soluciones innovadoras.</p>
            <a href="register.php" class="inline-block btn bg-blue-600 text-white px-6 py-3 rounded-lg">
                Regístrate Ahora
            </a>
        </section>
    </main>

    <footer class="bg-gray-800 mt-12">
        <div class="container mx-auto px-6 py-4 text-center text-gray-400">
            &copy; 2024 Empresa DEV. Todos los derechos reservados. | <a href="#" class="text-gray-300 hover:underline">Política de Privacidad</a>
        </div>
    </footer>

    <script>
        // Script para mostrar/ocultar el menú desplegable
        const menuButton = document.querySelector('button');
        const dropdown = document.querySelector('div.absolute');
        
        menuButton.addEventListener('click', () => {
            dropdown.classList.toggle('hidden');
        });
    </script>
</body>
</html>
