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
            gap: 20px;
            justify-content: center;
        }

        .card {
            background-color: rgb(38, 186, 165); /* Fondo azul */
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
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            line-height: 1.2;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .button-container {
            margin-top: 10px;
        }

        .button-container a {
            background-color: rgb(55, 95, 122); /* Verde */
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .button-container a:hover {
            background-color: white;
            color: rgb(38, 186, 165);
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
                <h2 class="card-title">{{ $link->title }}</h2>
                
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
