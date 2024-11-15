<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlaces Destacados</title>
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .card {
            background: linear-gradient(135deg, rgb(38, 186, 165), rgb(55, 95, 122)); /* Degradado de verde a azul */
            border-radius: 10px;
            color: white;
            text-align: center;
            padding: 20px;
            width: 300px; /* Ancho fijo */
            height: 450px; /* Altura fija */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between; /* Distribuye el contenido */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            overflow: hidden;
        }


        .card:hover {
            transform: translateY(-5px);
        }

        /* Imagen ajustada al 60% de la tarjeta */
        .card img {
            width: 100%;
            height: 60%; /* Imagen ocupa el 60% de la tarjeta */
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .card-title {
            font-size: 0.9rem; /* Tamaño de letra ligeramente más pequeño */
            margin-bottom: 4px; /* Ajuste sutil del margen */
            font-weight: 500; /* Peso moderado para un mejor enfoque */
            color: rgba(255, 255, 255, 0.85); /* Color blanco con opacidad para suavizar */
            display: -webkit-box; /* Usado para soportar el recorte en múltiples líneas */
            -webkit-line-clamp: 2; /* Limita el texto a 2 líneas */
            -webkit-box-orient: vertical; /* Orientación vertical para el recorte */
            overflow: hidden; /* Asegura que el texto no se desborde */
            text-overflow: ellipsis; /* Añade puntos suspensivos al final */
            transition: color 0.3s ease-in-out; /* Añade un efecto de transición */
        }

        .button-container {
            margin-top: 10px;
        }

        .button-container a {
            background: linear-gradient(135deg, rgb(38, 186, 165), rgb(38, 186, 165));
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .button-container a:hover {
            transform: scale(1.1); /* Aumenta el tamaño */
            background-color: rgb(55, 95, 122); /* Cambia el color de fondo */
            box-shadow: 0 0 15px 5px rgba(38, 186, 165, 0.6); /* Simula un brillo */
            color: white; /* Asegura que el texto se mantenga blanco */
        }

        .icon-container {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 10px;
        }

        .icon-container a {
            color: white;
            font-size: 1.5rem;
            transition: color 0.2s;
        }

        .icon-container a:hover {
            color: rgb(38, 186, 165); /* Verde al pasar el ratón */
        }

        /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  header %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
        /* Estilos del header */
.header {
    background-color: rgb(55, 95, 122); /* Fondo azul */
    color: white;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

/* Estilos del logo */
.header .logo {
    font-size: 1.8rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Estilos del menú */
.nav-menu {
    display: flex;
    gap: 25px;
}

.nav-menu a {
    color: white;
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s;
}

.nav-menu a:hover {
    color: rgb(38, 186, 165); /* Verde */
}

/* Menú responsive */
    .menu-toggle {
        display: none;
        font-size: 1.5rem;
        cursor: pointer;
        
    }

    @media (max-width: 768px) {
        .nav-menu {
            display: none;
            flex-direction: column;
            gap: 10px;
            background-color: rgb(55, 95, 122);
            position: absolute;
            top: 100%;
            right: 0;
            width: 200px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            
        }

        .nav-menu.active {
            display: flex;
        }

        .menu-toggle {
            display: block;
        }
    }



    </style>
    <!-- Agregar CDN de FontAwesome para los íconos -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <!-- Logo del sitio -->
        <div class="logo">Itenauta</div>
        
        <!-- Menú de navegación -->
        <nav>
            <div class="menu-toggle" onclick="toggleMenu()">☰</div>
            <div class="nav-menu" id="nav-menu">
                <a href="#">Inicio</a>
                <a href="#">Enlaces</a>
                <a href="#">Servicios</a>
                <a href="#">Contacto</a>
            </div>
        </nav>
    </header>

    <hr>
    
    <div class="card-container">
        @foreach ($links as $link)
            <div class="card">
                <!-- Imagen ocupando el 60% de la tarjeta -->
                <img src="{{ asset('storage/' . $link->image) }}" alt="{{ $link->title }}">
                
                <!-- Título centrado -->
                <h2 class="card-title">{{ $link->seo_description }}</h2>
                
                <!-- Botón centrado -->
                <div class="button-container">
                    <a href="{{ $link->url }}" target="_blank">Visitar enlace</a>
                </div>
    
                <!-- Íconos de redes sociales -->
                <div class="icon-container">
                    @if($link->facebook_clicks > 0)
                        <a href="{{ $link->facebook_url ?? '#' }}" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    @endif
    
                    @if($link->tiktok_clicks > 0)
                        <a href="{{ $link->tiktok_url ?? '#' }}" target="_blank">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    @endif
    
                    @if($link->instagram_clicks > 0)
                        <a href="{{ $link->instagram_url ?? '#' }}" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    @endif
    
                    @if($link->youtube_clicks > 0)
                        <a href="{{ $link->youtube_url ?? '#' }}" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    @endif
                    @if($link->youtube_clicks > 0)
                        <a href="{{ $link->whatsapp_url ?? '#' }}" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    
    
    <script>
        function toggleMenu() {
            const menu = document.getElementById('nav-menu');
            menu.classList.toggle('active');
        }
    </script>

</body>
</html>
