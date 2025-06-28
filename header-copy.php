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

        .comprar {
            font-family: "Ubuntu", serif;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 30px;
            font-size: 16px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }

        .comprar.cerrado {
            color: #f44336;
            border: 3px solid #f44336;
            background-color: #ffe6e5;
            font-weight: 500;
            cursor: pointer;
        }

            /* Estilo cuando la tienda está abierta */
        .comprar.abierto {
            color: #fff;
            font-weight: 500;
            background-color: #074d57; /* Verde para el estado abierto */
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
            /* Estilos por defecto */
            .button-container .comprar {
                font-family: "Ubuntu", serif;
                padding: 10px 20px;
                font-weight: 500;
                text-decoration: none;
                border-radius: 30px;
                font-size: 16px;
                box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            }

            .button-container .comprar i {
                margin-right: 8px;
            }

            /* Estilo cuando la tienda está cerrada */
            .button-container .comprar.cerrado {
                color: #f44336;
                border: 3px solid #f44336;
                background-color: #ffe6e5;
                cursor: pointer;
            }

            /* Estilo cuando la tienda está abierta */
            .button-container .comprar.abierto {
                color: #fff;
                background-color: #074d57; /* Verde para el estado abierto */
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
                <li><a class="comprar" href="/registro/select.php" target="_blank"><i class="fa-solid fa-bag-shopping"></i> Comprar</a></li>
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

   <script>
    function obtenerEstadoTienda() {
        const fecha = new Date();
        const dia = fecha.getDay(); // Día de la semana (0 - Domingo, 1 - Lunes, ..., 6 - Sábado)
        const hora = fecha.getHours(); // Hora actual
        const minuto = fecha.getMinutes(); // Minuto actual

        // Horarios de lunes a viernes (8:00 - 18:00)
        const horarioLunesViernesInicio = 8;
        const horarioLunesViernesFin = 16;

        // Horarios de sábado, domingo y festivos (9:00 - 16:30)
        const horarioFinDeSemanaInicio = 9;
        const horarioFinDeSemanaFin = 16;
        const minutoFinDeSemana = 30;

        let estado = '¡Ops...! Nuestra tienda está cerrada';
        let icono = 'fa-regular fa-face-frown'; // Icono de tienda cerrada por defecto
        let claseEstado = 'cerrado'; // Clase para el color rojo
        let mostrarBoton = false; // Variable para determinar si mostrar el botón de acción
        let tiempoRestante = ''; // Variable para el tiempo restante
        let href = '/registro/select.php'; // URL por defecto

        // Función para formatear el tiempo (horas, minutos, segundos)
        function formatearTiempo(horas, minutos, segundos) {
            return `${horas.toString().padStart(2, '0')} hora(s) ${minutos.toString().padStart(2, '0')} minuto(s) ${segundos.toString().padStart(2, '0')} segundo(s)`;
        }

        // Calcular el tiempo restante hasta la próxima apertura
        function calcularTiempoRestante(horaApertura, minutoApertura) {
            const ahora = new Date();
            let proximaApertura = new Date(ahora);
            if (dia >= 1 && dia <= 5) {
                // Lunes a viernes
                proximaApertura.setHours(horaApertura, minutoApertura, 0, 0);
                if (ahora > proximaApertura) {
                    // Si ya pasó la hora de apertura, lo calculamos para el próximo día
                    proximaApertura.setDate(proximaApertura.getDate() + 1);
                }
            } else if (dia === 6 || dia === 0) {
                // Sábado o domingo
                proximaApertura.setHours(horaApertura, minutoApertura, 0, 0);
                if (ahora > proximaApertura) {
                    // Si ya pasó la hora de apertura, lo calculamos para el próximo lunes
                    proximaApertura.setDate(proximaApertura.getDate() + (1 - dia + 7) % 7); // Sumar días hasta el próximo lunes
                }
            }
            const diferencia = proximaApertura - ahora; // Diferencia en milisegundos
            const horasRestantes = Math.floor(diferencia / (1000 * 60 * 60));
            const minutosRestantes = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
            const segundosRestantes = Math.floor((diferencia % (1000 * 60)) / 1000);
            return formatearTiempo(horasRestantes, minutosRestantes, segundosRestantes);
        }

        // Verificar si es lunes a viernes
        if (dia >= 1 && dia <= 5) {
            if (hora >= horarioLunesViernesInicio && hora < horarioLunesViernesFin) {
                estado = '¡Tu tienda favorita está abierta!';
                icono = 'fa-face-smile-wink';
                claseEstado = 'abierto';
                mostrarBoton = true;
                href = '/registro/select.php'; // Enlace cuando la tienda está abierta
            } else {
                tiempoRestante = calcularTiempoRestante(horarioLunesViernesInicio, 0); // Calcular el tiempo para la siguiente apertura
                href = '/cerrado.php'; // Redirigir a una página de "cerrado" cuando la tienda no está abierta
            }
        }

        // Verificar si es fin de semana (sábado o domingo)
        if (dia === 6 || dia === 0) {
            if (hora >= horarioFinDeSemanaInicio && hora < horarioFinDeSemanaFin) {
                estado = '¡Tu tienda favorita está abierta!';
                icono = 'fa-face-smile-wink';
                claseEstado = 'abierto';
                mostrarBoton = true;
                href = '/registro/select.php'; // Enlace cuando la tienda está abierta
            } else {
                tiempoRestante = calcularTiempoRestante(horarioFinDeSemanaInicio, minutoFinDeSemana); // Calcular el tiempo para la siguiente apertura
                href = '/cerrado.php'; // Redirigir a una página de "cerrado" cuando la tienda no está abierta
            }
        }

        // Seleccionar todos los botones "comprar" (tanto para escritorio como móvil)
        const botonesComprar = document.querySelectorAll('.comprar, .comprar2'); // Seleccionar ambas clases

        botonesComprar.forEach(botonComprar => {
            if (mostrarBoton) {
                botonComprar.innerHTML = '<i class="fa-solid fa-bag-shopping"></i> Comprar'; // Botón visible si la tienda está abierta
                botonComprar.classList.remove('cerrado'); // Eliminar clase de cerrado
                botonComprar.classList.add('abierto');    // Añadir clase de abierto
                botonComprar.href = '/registro/select.php'; // URL para cuando la tienda está abierta
            } else {
                // Agregar ícono de cerrado junto al texto
                botonComprar.innerHTML = '<i class="fa-solid fa-shop-lock"></i> Cerrado'; // Aquí se añade el ícono de "cerrado"
                botonComprar.classList.remove('abierto'); // Eliminar clase de abierto
                botonComprar.classList.add('cerrado');    // Añadir clase de cerrado
                botonComprar.href = './footer/horarios.php'; // URL para cuando la tienda está cerrada
            }
        });

        // Mostrar el tiempo restante si la tienda está cerrada
        if (tiempoRestante) {
            document.getElementById('tiempo-restante').textContent = `Abrimos en: ${tiempoRestante}`;
        }

        // Actualizar el contador cada segundo si la tienda está cerrada
        if (tiempoRestante) {
            setInterval(function () {
                tiempoRestante = calcularTiempoRestante(
                    (dia >= 1 && dia <= 5) ? horarioLunesViernesInicio : horarioFinDeSemanaInicio,
                    (dia === 6 || dia === 0) ? minutoFinDeSemana : 0
                );
                document.getElementById('tiempo-restante').textContent = `Abrimos en: ${tiempoRestante}`;
            }, 1000);
        }
    }

    window.onload = obtenerEstadoTienda;

    </script>

</body>
</html>
