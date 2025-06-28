<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/mokap-ico.png">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

        body {
            font-family: "Ubuntu", serif;
            margin: 0;
            padding: 0;
        }

        /* Reset básico */
        * {
          box-sizing: border-box;
        }

        /* HEADER GENERAL */
        header {
            background: #effdffde;
            backdrop-filter: blur(2rem);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 30px;
            color: white;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo a {
            display: flex;
            align-items: center;
            text-decoration: none;
            font-weight: 700;
            color: #074d57;
            font-size: 18px;
        }

        .logo a img {
            height: 50px;  /* Ajusta el tamaño del logo según sea necesario */
            width: auto;
        }

        /* MENÚ ESCRITORIO */
        .nav-desktop {
            display: flex;
        }

        .nav-desktop ul {
            display: flex;
            list-style: none;
            margin: 0;
        }

        .nav-desktop ul li {
            margin: 0 10px;
        }

        .nav-desktop ul li a {
            color: #074d57;
            text-decoration: none;
            font-size: 18px;
            font-weight: 400;
            transition: color 0.3s ease, transform 0.3s ease; /* Transición para color y transformación */
        }

        .nav-desktop ul li a:hover {
            color: #018b91;
            transform: scale(1.1);  /* Le da un pequeño efecto de aumento */
        }

        /* MENÚ MÓVIL SIMPLE */
        /* MENÚ MÓVIL SIMPLE */
        .nav-mobile {
            max-height: 0;
            overflow: hidden;
            position: absolute;
            background: #effdff;
            top: 100%;
            right: 0;
            width: 100%;
            z-index: 998;
            transition: max-height 0.4s ease-in-out;
        }

        .nav-mobile ul {
            list-style: none;
            margin: 0;
            display: flex;
            padding: 1rem 2rem;
            flex-direction: column;
            flex-wrap: nowrap;
        }

        .nav-mobile ul li {
            margin: 10px 0;
        }

        .nav-mobile ul li a {
            color: #074d57;
            font-size: 18px;
            font-weight: 400;
            display: flex;
            gap: 8px;
            text-decoration: none;
            align-items: center;
        }

        /* Cuando se activa */
        .nav-mobile.active {
            max-height: 300px; /* Ajusta este valor según la cantidad de opciones que tengas */
        }

        .copm {
                display: flex;
                background: #074d57;
                padding: 1rem;
                align-items: center;
                justify-content: center;
        }

        /* Botón cerrar */
        .close-btn {
            position: absolute;
            top: 20px;
            right: 25px;
            font-size: 36px;
            color: white;
            cursor: pointer;
        }

        /* HAMBURGER */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .bar {
            width: 25px;
            height: 3px;
            background-color: #14878b;
            margin: 3px 0;
            border-radius: 2px;
        }

        /* Botón adicional */
        .button-container {
            display: none; /* Ocultamos el botón por defecto */
        }

        /* Responsividad */
        @media (max-width: 768px) {
            header {
                padding: 15px 20px;
            }
            .nav-desktop {
                display: none;
            }
            .hamburger {
                display: flex;
            }
            /* Coloca el botón junto al menú hamburguesa en móviles */
            .button-container {
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 1rem;

            }
            .comprar {
                background: #074d57;
                padding: 10px 15px;
                border-radius: 40px;
                color: white;
                font-size: 1rem;
                text-decoration: none;
                display: flex;
                gap: 6px;
                align-items: center;
                box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <a href="./index.php"><img src="./img/mokap-ico.png" alt="MOKAPOP-LOG">MoKaPop</a>
        </div>

        <!-- Menú de escritorio -->
        <nav class="nav-desktop">
            <ul>
                <img src="./img/bancol.png" style="width: 30px; height: auto; margin: auto;" alt="bandera-col">
                <p style="margin: auto; color: #bfbb00; font-size: 1rem; font-weight: 500; margin-left: 5px; margin-right: 5px;"> COP</p>
                <li><a href="/registro/select.php" target="_blank" style="background: #074d57; padding: 10px 15px; border-radius: 40px; color: white; font-size: 1rem;"><i class="fa-solid fa-bag-shopping"></i> Comprar</a></li>
                <li><a href="/login.html" target="_blank"><i class="fa-regular fa-user"></i> Cuenta</a></li>
                <li><a href="/registro/select.php" target="_blank">MokaPuntos</a></li>
                <li><a href="/registro/select.php" target="_blank">Tarjetas</a></li>
                <li><a href="/informacion/precios/precios.php" target="_blank"><i class="fa-solid fa-phone"></i></a></li>
            </ul>
        </nav>

        <!-- Menú móvil y botón -->
            <div class="button-container">
                <a class="comprar" href="/registro/select.php" target="_blank"><i class="fa-solid fa-bag-shopping"></i> Comprar</a>
            
                <div class="hamburger" onclick="toggleMobileMenu()">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>

                <!-- MENÚ FULLSCREEN -->
                <nav class="nav-mobile" id="mobileMenu">
                <ul>
                    <li><a href="/registro/select.php"><i class="fa-regular fa-user"></i> Tu cuenta</a></li>
                    <li><a href="/registro/select.php" target="_blank">MokaPuntos</a></li>
                    <li><a href="/registro/select.php" target="_blank">Tarjetas</a></li>
                    <li><a href="#"><i class="fa-solid fa-phone"></i> Contacto</a></li>
                    </ul>

                    <div class="copm">
                        <img src="./img/bancol.png" style="width: 30px; height: auto;" alt="bandera-col">
                        <p style="color: #bfbb00; font-size: 1rem; font-weight: 500; margin-left: 5px;"> COP</p>
                    </div>
                </nav>
            </div>


    </header>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>
