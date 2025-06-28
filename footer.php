<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

/* Estilo para el footer */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Ubuntu", sans-serif;
    margin: 0;
    padding: 0;
}

.creditt {
    text-align: center;
}

.creditt h2 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
}

.creditt a {
    color: #ffffff;
    font-weight: 500;
    font-size: 15px;
}

footer {
    background-color: #074d57;
    color: white;
    padding: 40px 0;
}

.footer-container {
    display: flex;
    margin: 2rem;
    margin-bottom: 20px;
    text-align: center;
    flex-direction: row;
    justify-content: space-between;
}

.footer-section {
    flex: 1;
}

.footer-section h3 {
    font-size: 20px;
    margin-bottom: 15px;
    color:rgb(255, 255, 255);
}

.footer-section p,
.footer-section ul {
    font-size: 1rem;
    line-height: 1.5;
    list-style: none;
}

.footer-section li {
    margin-bottom: 7px;
}

.footer-section a {
    color: #f1fdff;
    font-weight: 500;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-section a:hover {
    color: #018b91;
}

.footer-section .social-icons {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.footer-section .social-icons a {
    font-size: 24px;
    color: #fff;
    transition: color 0.3s;
}

.footer-section .social-icons a:hover {
    color: #03494c;
}

.i-pago {
    font-size: 1.5rem;
    margin: auto;
    margin-bottom: 2rem;
    margin-top: 2rem;
    padding: 1rem;
    width: fit-content;
    border-radius: 40px;
    background: aliceblue;
    color: #074d57;
}

/* Logo de la empresa */
.footer-logo {
    margin: 1rem;
}

.footer-logo img {
    width: 150px;
}

/* Sección inferior del footer */
.footer-bottom {
    text-align: center;
    padding-top: 20px;
    border-top: 2px solid #ffffff;
    margin: 1rem;
}

.footer-bottom p {
    color: white;
    font-weight: 500;
    font-size: 0.85rem;
    margin-bottom: 0;
}

@media (max-width: 768px) {
    .footer-container {
        display: flex;
        margin: 3rem;
        margin-bottom: 20px;
        flex-direction: column;
        gap: 2rem;
    }

    .fmb {
        border: 1px solid #f1fdff;
        border-radius: 20px;
        padding: 1rem;
    }
}

    </style>
</head>
<body>

    <!-- Contenido de la página (esto va antes del footer) -->
    
 <footer class="footer">
        <div class="creditt">
            <h2 style="color: white;">MoKaPop Mompox 2025</h2>
            <a href="https://scolboux.ct.ws" target="_blank">By SCOLBOUX COLOMBIA S.A.S</a>
        </div>
        <div class="footer-container">
            <div class="footer-section">
                <div class="fmb">
                    <h3>Sobre MoKaPop</h3>
                    <p style="text-align: justify;">MokaPop o MokaPop Mompox, es una marca comercial de SCOLBOUX COLOMBIA S.A.S, dedicada única y exclusivamente a la preparación y venta de café listo para consumir (frío/caliente).</p>
                </div>
            </div>
            <div class="footer-section">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <li><a href="./footer/horarios.php">Horarios</a></li>
                    <li><a href="#">Fidelización</a></li>
                    <li><a href="#">PQRS</a></li>
                    <li><a href="#">Pagos</a></li>
                    <li><a href="#">Reembolsos</a></li>
                    <li><a href="#">P. Privacidad</a></li>
                    <li><a href="#">TyC</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Redes Sociales</h3>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

            <div class="i-pago">
                <i class="fa-solid fa-truck"></i>
                <i class="fa-brands fa-cc-visa"></i>
                <i class="fa-brands fa-cc-mastercard"></i>
                <i class="fa-brands fa-cc-amex"></i>
                <i class="fa-brands fa-apple-pay"></i>
                <i class="fa-brands fa-google-pay"></i>
            </div>

        <div class="footer-bottom">
            <p>Copyright &copy; 2025 SCOLBOUX COLOMBIA S.A.S</p>
        </div>
    </footer>

</body>
</html>
