<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestras Aplicaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: rgb(38, 186, 165);
            --secondary-color: rgb(55, 95, 122);
        }
        
        .bg-primary-custom {
            background-color: var(--primary-color);
        }
        
        .bg-secondary-custom {
            background-color: var(--secondary-color);
        }
        
        .text-primary-custom {
            color: var(--primary-color);
        }
        
        .text-secondary-custom {
            color: var(--secondary-color);
        }
        
        .border-primary-custom {
            border-color: var(--primary-color);
        }
        
        .border-secondary-custom {
            border-color: var(--secondary-color);
        }
        
        .btn-primary-custom {
            background-color: var(--primary-color);
            color: white;
        }
        
        .btn-primary-custom:hover {
            background-color: rgba(38, 186, 165, 0.9);
        }
        
        .btn-secondary-custom {
            background-color: var(--secondary-color);
            color: white;
        }
        
        .btn-secondary-custom:hover {
            background-color: rgba(55, 95, 122, 0.9);
        }
        
        .gradient-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }
        
        .nav-scrolled {
            background-color: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .section-fade {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .section-fade.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .app-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .app-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .social-card {
            transition: transform 0.3s ease;
        }
        
        .social-card:hover {
            transform: scale(1.03);
        }
        
        .footer-link {
            transition: color 0.3s ease;
        }
        
        .footer-link:hover {
            color: var(--primary-color);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Menú de navegación con animación al scroll -->
    <nav id="main-nav" class="fixed top-0 left-0 w-full py-4 z-50 transition-all duration-300">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <a href="#" class="text-2xl font-bold text-secondary-custom">AppHub</a>
                
                <div class="hidden md:flex space-x-8">
                    <a href="#hero" class="nav-link text-secondary-custom hover:text-primary-custom font-medium">Inicio</a>
                    <a href="#featured" class="nav-link text-secondary-custom hover:text-primary-custom font-medium">Destacadas</a>
                    <a href="#apps" class="nav-link text-secondary-custom hover:text-primary-custom font-medium">Aplicaciones</a>
                    <a href="#about" class="nav-link text-secondary-custom hover:text-primary-custom font-medium">Nosotros</a>
                    <a href="#contact" class="nav-link text-secondary-custom hover:text-primary-custom font-medium">Contacto</a>
                </div>
                
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-secondary-custom focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Menú móvil -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 bg-white rounded-lg shadow-lg p-4">
                <div class="flex flex-col space-y-4">
                    <a href="#hero" class="text-secondary-custom hover:text-primary-custom font-medium">Inicio</a>
                    <a href="#featured" class="text-secondary-custom hover:text-primary-custom font-medium">Destacadas</a>
                    <a href="#apps" class="text-secondary-custom hover:text-primary-custom font-medium">Aplicaciones</a>
                    <a href="#about" class="text-secondary-custom hover:text-primary-custom font-medium">Nosotros</a>
                    <a href="#contact" class="text-secondary-custom hover:text-primary-custom font-medium">Contacto</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Sección Hero -->
    <section id="hero" class="pt-28 pb-20 gradient-primary text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Descubre Nuestras Aplicaciones</h1>
                    <p class="text-xl mb-8">Todas nuestras creaciones en un solo lugar. Explora, descubre y disfruta de nuestras aplicaciones web.</p>
                    <div class="flex space-x-4">
                        <a href="#apps" class="bg-white text-secondary-custom px-6 py-3 rounded-full font-bold hover:bg-gray-100 transition-colors">Ver Aplicaciones</a>
                        <a href="#about" class="border-2 border-white text-white px-6 py-3 rounded-full font-bold hover:bg-white hover:text-secondary-custom transition-colors">Sobre Nosotros</a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="https://via.placeholder.com/600x400" alt="Apps Showcase" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección de Estadísticas -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6">
                    <div class="text-4xl font-bold text-primary-custom mb-2">{{ count(array_filter($items, function($item) { return $item['type'] === 'app'; })) }}</div>
                    <p class="text-gray-600 text-lg">Aplicaciones</p>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-primary-custom mb-2">{{ array_sum(array_map(function($item) { return $item['type'] === 'app' ? $item['data']->clicks : 0; }, $items)) }}</div>
                    <p class="text-gray-600 text-lg">Visitas Totales</p>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-primary-custom mb-2">{{ count(array_filter($items, function($item) { return $item['type'] === 'social'; })) }}</div>
                    <p class="text-gray-600 text-lg">Redes Sociales</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección de Aplicaciones Destacadas -->
    <section id="featured" class="py-20 bg-gray-50 section-fade">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-secondary-custom mb-4">Aplicaciones Destacadas</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Descubre nuestras aplicaciones más populares y mejor valoradas por nuestros usuarios.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $featuredApps = array_filter($items, function($item) {
                        return $item['type'] === 'app';
                    });
                    $featuredApps = array_slice($featuredApps, 0, 3);
                @endphp
                
                @foreach($featuredApps as $item)
                    <a href="{{ route('app.redirect', $item['data']->slug) }}" class="app-card block bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="h-48 bg-gray-200 overflow-hidden">
                            @if($item['data']->thumbnail)
                                <img src="{{ asset('storage/' . $item['data']->thumbnail) }}" alt="{{ $item['data']->name }}" class="w-full h-full object-cover">
                            @elseif($item['data']->image)
                                <img src="{{ asset('storage/' . $item['data']->image) }}" alt="{{ $item['data']->name }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-300">
                                    <span class="text-gray-500 text-xl">{{ $item['data']->name }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-xl font-bold text-secondary-custom">{{ $item['data']->name }}</h3>
                                <span class="bg-primary-custom text-white text-xs px-3 py-1 rounded-full">Popular</span>
                            </div>
                            @if($item['data']->description)
                                <p class="text-gray-600 mb-4 line-clamp-2">{{ $item['data']->description }}</p>
                            @endif
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">{{ $item['data']->clicks }} visitas</span>
                                <span class="btn-secondary-custom text-xs px-4 py-2 rounded-full">Explorar</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            
            <div class="text-center mt-12">
                <a href="#apps" class="btn-primary-custom px-8 py-3 rounded-full font-bold inline-block">Ver Todas las Aplicaciones</a>
            </div>
        </div>
    </section>
    
    <!-- Sección Sobre Nosotros -->
    <section id="about" class="py-20 bg-white section-fade">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <img src="https://via.placeholder.com/600x400" alt="Sobre Nosotros" class="rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-bold text-secondary-custom mb-6">Sobre Nosotros</h2>
                    <p class="text-gray-600 mb-6 text-lg">Somos un equipo apasionado por la creación de aplicaciones web innovadoras y útiles. Nuestro objetivo es desarrollar soluciones que mejoren la vida de las personas y aporten valor a través de la tecnología.</p>
                    <p class="text-gray-600 mb-8 text-lg">Compartimos nuestras creaciones en redes sociales para llegar a más personas y construir una comunidad de usuarios que disfruten de nuestras aplicaciones.</p>
                    <div class="flex space-x-4">
                        <a href="#contact" class="btn-primary-custom px-6 py-3 rounded-full font-bold">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección Principal de Aplicaciones -->
    <section id="apps" class="py-20 bg-gray-50 section-fade">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-secondary-custom mb-4">Todas Nuestras Aplicaciones</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Explora nuestra colección completa de aplicaciones web. Encuentra la herramienta perfecta para tus necesidades.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($items as $item)
                    @if($item['type'] === 'app')
                        <a href="{{ route('app.redirect', $item['data']->slug) }}" class="app-card block bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="h-40 bg-gray-200 overflow-hidden">
                                @if($item['data']->thumbnail)
                                    <img src="{{ asset('storage/' . $item['data']->thumbnail) }}" alt="{{ $item['data']->name }}" class="w-full h-full object-cover">
                                @elseif($item['data']->image)
                                    <img src="{{ asset('storage/' . $item['data']->image) }}" alt="{{ $item['data']->name }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gray-300">
                                        <span class="text-gray-500 text-xl">{{ $item['data']->name }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="p-4">
                                <h2 class="text-xl font-semibold mb-2 text-secondary-custom">{{ $item['data']->name }}</h2>
                                @if($item['data']->description)
                                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $item['data']->description }}</p>
                                @endif
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-500">{{ $item['data']->clicks }} visitas</span>
                                    <span class="bg-primary-custom text-white text-xs px-3 py-1 rounded-full">Abrir</span>
                                </div>
                            </div>
                        </a>
                    @else
                        <div class="social-card block gradient-primary text-white rounded-lg shadow-md overflow-hidden">
                            <div class="p-6 flex flex-col items-center text-center">
                                @if($item['data']->icon)
                                    <img src="{{ asset('storage/' . $item['data']->icon) }}" alt="{{ $item['data']->name }}" class="w-16 h-16 mb-4">
                                @else
                                    <div class="w-16 h-16 rounded-full bg-white text-secondary-custom flex items-center justify-center mb-4 text-2xl font-bold">
                                        {{ substr($item['data']->name, 0, 1) }}
                                    </div>
                                @endif
                                <h3 class="text-xl font-bold mb-2">{{ $item['data']->name }}</h3>
                                @if($item['data']->description)
                                    <p class="mb-4">{{ $item['data']->description }}</p>
                                @endif
                                <a href="{{ $item['data']->url }}" target="_blank" class="bg-white text-secondary-custom font-semibold px-4 py-2 rounded-full hover:bg-opacity-90 transition-colors">
                                    Síguenos
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- Sección de Contacto -->
    <section id="contact" class="py-20 bg-white section-fade">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-secondary-custom mb-4">Contáctanos</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">¿Tienes alguna pregunta o sugerencia? ¿Quieres colaborar con nosotros? Estamos aquí para ayudarte.</p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="bg-gray-50 rounded-lg shadow-md p-8">
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nombre</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-custom focus:border-transparent">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-custom focus:border-transparent">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Asunto</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-custom focus:border-transparent">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Mensaje</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-custom focus:border-transparent"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-primary-custom px-8 py-3 rounded-full font-bold">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-secondary-custom text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <h3 class="text-xl font-bold mb-4">AppHub</h3>
                    <p class="mb-4 text-gray-300">Tu destino para descubrir todas nuestras aplicaciones web en un solo lugar. Explora, disfruta y comparte.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-primary-custom transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-white hover:text-primary-custom transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-white hover:text-primary-custom transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-white hover:text-primary-custom transition-colors">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="#" class="text-white hover:text-primary-custom transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Enlaces Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="#hero" class="footer-link text-gray-300 hover:text-white">Inicio</a></li>
                        <li><a href="#featured" class="footer-link text-gray-300 hover:text-white">Aplicaciones Destacadas</a></li>
                        <li><a href="#apps" class="footer-link text-gray-300 hover:text-white">Todas las Aplicaciones</a></li>
                        <li><a href="#about" class="footer-link text-gray-300 hover:text-white">Sobre Nosotros</a></li>
                        <li><a href="#contact" class="footer-link text-gray-300 hover:text-white">Contacto</a></li>
                        <li><a href="{{ route('app.statistics') }}" class="footer-link text-gray-300 hover:text-white">Estadísticas</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Categorías</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Productividad</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Entretenimiento</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Educación</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Herramientas</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Utilidades</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Juegos</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Suscríbete</h3>
                    <p class="mb-4 text-gray-300">Recibe notificaciones sobre nuevas aplicaciones y actualizaciones.</p>
                    <form class="mb-4">
                        <div class="flex">
                            <input type="email" placeholder="Tu email" class="px-4 py-2 w-full rounded-l-md focus:outline-none">
                            <button type="submit" class="bg-primary-custom px-4 py-2 rounded-r-md hover:bg-opacity-90 transition-colors">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                    <p class="text-sm text-gray-300">Nos comprometemos a mantener tu información segura. Nunca compartiremos tus datos.</p>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">&copy; {{ date('Y') }} AppHub. Todos los derechos reservados.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="footer-link text-gray-400 text-sm">Términos de Servicio</a>
                        <a href="#" class="footer-link text-gray-400 text-sm">Política de Privacidad</a>
                        <a href="#" class="footer-link text-gray-400 text-sm">Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script>
        // Menú móvil toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Animación del menú al hacer scroll
        const nav = document.getElementById('main-nav');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                nav.classList.add('nav-scrolled');
            } else {
                nav.classList.remove('nav-scrolled');
            }
        });
        
        // Animación de secciones al hacer scroll
        const sections = document.querySelectorAll('.section-fade');
        
        const fadeInOptions = {
            threshold: 0.1
        };
        
        const fadeInObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, fadeInOptions);
        
        sections.forEach(section => {
            fadeInObserver.observe(section);
        });
        
        // Scroll suave para los enlaces de navegación
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Cerrar el menú móvil si está abierto
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
    </script>
</body>
</html>

