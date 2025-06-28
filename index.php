<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOKAPOP - MOMPOX</title>
    <link rel="shortcut icon" href="./img/mokap-ico.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

        body {
            font-family: "Ubuntu", sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #effdffde
        }

    /* Banner */
    .banner {
        background-image: linear-gradient(rgb(0 0 0 / 69%), rgb(0 104 117 / 54%)), url('./img/2.png');
        background-size: contain;
        background-attachment: local;
        background-position: center;
        height: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        text-align: center;
        padding: 50px;
    }

    .banner h1 {
        font-size: 40px;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .banner p {
        font-size: 20px;
        font-weight: 300;
        margin-bottom: 30px;
    }

    .banner .btn-shop {
        background-color: #effdff;
        padding: 10px 20px;
        color: #14878b;;
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 20px;
        transition: color 0.3s ease, transform 0.3s ease; /* Transición para color y transformación */

    }

    .banner .btn-shop:hover {
        color: #03494c;
        transform: scale(1.1);  /* Le da un pequeño efecto de aumento */
    }

    main {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
    }

    h2 {
        font-weight: 500;
        color: #074d57;
        margin-bottom: 1rem;
    }

.combos-promos-wrapper {
  display: flex;
  flex-wrap: wrap;        /* Por si el ancho es menor */
  gap: 40px;
  justify-content: center;
  align-items: flex-start;
}
.irresi, .promos-section {
  flex: 1 1 400px;
  max-width: 500px;
}

.combos-section {
  padding: 10px 20px;
  text-align: center;
  font-family: inherit;
}

.combo-carousel {
  position: relative;
  max-width: 600px;
  aspect-ratio: 16 / 9;
  margin: 0 auto;
  overflow: hidden;
  box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  border-radius: 20px;
}

.combo-slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  object-fit: cover;
  opacity: 0;
  transition: opacity 0.5s ease;
}

.combo-slide.active-slide {
  opacity: 1;
  z-index: 2;
}

.combo-dots {
  margin-top: 20px;
  display: flex;
  justify-content: center;
  gap: 10px;
}

.combo-dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #a0c2c7;
  cursor: pointer;
  transition: background-color 0.3s;
}

.combo-dot.active-dot {
  background-color: #074d57;
}

/* Promo cards responsive */
.promo-carousel {
  position: relative;
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  overflow: hidden;
  height: 120px;
}

.promo-card {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #074d57;
  color: white;
  border-radius: 20px;
  padding: 20px;
  font-size: 18px;
  font-weight: 500;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: opacity 0.5s ease;
  opacity: 0;
  text-align: center;
}

.promo-card.active {
  opacity: 1;
  z-index: 2;
}

/* Responsive ajustes */
@media (max-width: 768px) {
  .promo-card {
    min-height: 120px;
    font-size: 16px;
    padding: 16px;
  }

  .combos-promos-wrapper {
      display: flex;
      flex-wrap: wrap;
  }

}

.code {
  background-color: #ffffff;
  color: #074d57;
  padding: 4px 8px;
  border-radius: 5px;
  font-family: inherit;
  margin-left: 6px;
}

.dots {
  margin-top: 20px;
  display: flex;
  justify-content: center;
  gap: 10px;
}

.dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #a0c2c7;
  cursor: pointer;
  transition: background-color 0.3s;
}

.active-dot {
  background-color: #074d57;
}

.video-nosotros {
  padding: 60px 20px;
}

.video-contenido {
  display: flex;
  flex-direction: column;
  max-width: 900px;
  margin: 0 auto;
  gap: 20px;
}

.video-texto {
  flex: 1;
  text-align: center;
}

.video-texto p {
  font-size: 1em;
  color: #074d57;
  line-height: 1.5;
}

.video-container {
  flex: 1;
  width: 100%;
}

/* MÓVIL: relación 16:9 clásica */
@media (max-width: 767px) {
  .video-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
  }

  .video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
}

/* ESCRITORIO: altura fija y natural */
@media (min-width: 768px) {
  .video-contenido {
    flex-direction: row;
    align-items: center;
  }

  .video-container iframe {
    width: 100%;
    height: 300px; /* puedes ajustar esta altura */
    border-radius: 8px;
    border: none;
  }
}

.beneficios {
  padding: 60px 20px;
  background: #074d57;
  border-radius: 20px;
  box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  text-align: center;
}

.beneficios h2 {
  color: white;
  margin-bottom: 40px;
}

.beneficios-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 30px;
}

.beneficios i {
  padding: 1rem;
  font-size: 2rem;
  background: #effdffde;
  border-radius: 50px;
  color: #074d57;
}

.beneficio img {
  width: 60px;
  border-radius: 50px;
  margin-bottom: 15px;
}

.beneficio h3 {
  margin: 10px 0;
  font-weight: 500;
  color: white;
}

.beneficio p {
  font-size: 0.95em;
  color: white;
}


.galeria {
  text-align: center;
  padding: 60px 20px;
}

.carrusel {
  position: relative;
  max-width: 700px;
  margin: 0 auto;
  overflow: hidden;
}

.carrusel-imagenes {
  display: flex;
  transition: transform 0.4s ease-in-out;
  width: 100%;
}

.carrusel-img {
  min-width: 100%;
  height: auto;
  display: none;
  border-radius: 20px;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}

.carrusel-img.activa {
  display: block;
}

.flecha {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.4);
  color: white;
  border: none;
  font-size: 2em;
  padding: 10px 15px;
  cursor: pointer;
  z-index: 2;
  border-radius: 5px;
}

.flecha.izquierda {
  left: 10px;
}

.flecha.derecha {
  right: 10px;
}

.indicadores {
  margin-top: 15px;
}

.punto {
  height: 12px;
  width: 12px;
  margin: 0 5px;
  background-color: #a0c2c7;
  display: inline-block;
  border-radius: 50%;
  cursor: pointer;
}

.punto.activo {
  background-color: #074d57;
}


.newsletter-section {
  padding: 50px 20px;
  text-align: center;
  font-family: inherit;
}

.newsletter-section p {
  font-size: 18px;
  color: #074d57;
  margin-bottom: 20px;
}

.newsletter-form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 400px;
  margin: 0 auto;
}

.newsletter-form input {
  padding: 12px;
  border: 1px solid #074d57;
  font-family: inherit;
  color: #074d57;
  border-radius: 8px;
  font-size: 15px;
}

.newsletter-form input:focus {
  outline: none;
}

.newsletter-form button {
  padding: 12px;
  background-color: #074d57;
  font-family: inherit;
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  transition: background 0.3s;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}

.newsletter-form button:hover {
  background-color:rgb(16, 132, 150);
}

.newsletter-msg {
  margin-top: 15px;
  color: green;
  font-weight: 500;
}


    .reseñas-section {
      background-color: #c2e1e5;
      padding: 50px 20px;
      text-align: center;
      border-radius: 20px;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    }

    .reseñas-section img {
        width: 50%;
    }

    .reseñas-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .reseña {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 20px;
      width: 300px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      transition: transform 0.3s;
    }

    .reseña:hover {
      transform: scale(1.03);
    }

    .reseña .nombre {
      font-weight: 500;
      color: #074d57;
    }

    .reseña .texto {
      margin: 10px 0;
      font-style: italic;
      color: #074d57;
    }

    .estrella {
      color: #074d57;
    }

    /* 4. FAQ */
    .faq-section {
      padding: 50px 20px;
      max-width: 800px;
      margin: auto;
    }

    .faq-item {
      margin-bottom: 20px;
      border-bottom: 1px solid #074d57;
    }

    .faq-question {
        cursor: pointer;
        padding: 15px;
        color: white;
        background: #074d57;
        font-weight: 500;
        position: relative;
        transition: background 0.3s;
    }

    .faq-question:hover {
      background: #1d7784;
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease;
      padding: 0 15px;
      color: #074d57;
    }

    .faq-item.active .faq-answer {
      max-height: 200px;
      padding: 15px;
    }

    /* Animaciones */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
/* Responsividad para pantallas pequeñas */
@media (max-width: 768px) {
        .banner {
            background-size: cover;
            height: auto;
        }

        .banner h1 {
            font-size: 1.5rem;
        }

        .banner p {
            font-size: 1rem;
        }
      }
    </style>
</head>
<body>
    
    <?php include './header-copy.php'; ?>

    
    <section class="banner">
        <div class="banner-text">
            <h1>El Mejor Café Directo de la Granja</h1>
            <p>Descubre los sabores auténticos y frescos de nuestro café 100% natural.</p>
            <a href="#productos" class="btn-shop"><i class="fa-solid fa-bag-shopping"></i> Comprar</a>
        </div>
    </section>

    <main>

      <section class="combos-section">
        <div class="combos-promos-wrapper">

          <!-- Bloque 1: Combos irresistibles -->
          <div class="irresi">
            <h2><i class="fa-solid fa-face-smile-beam"></i> Combos irresistibles</h2>

            <div class="combo-carousel" id="comboCarousel">
              <img src="./img/1mk.png" class="combo-slide active-slide" alt="Combo 1: Café frío + pastelito">
              <img src="./img/2mk.png" class="combo-slide" alt="Combo 2: Capuchino + croissant">
              <img src="./img/1mk.png" class="combo-slide" alt="Combo 3: Americano + galletas">
            </div>

            <div class="combo-dots" id="comboDots">
              <span class="combo-dot active-dot"></span>
              <span class="combo-dot"></span>
              <span class="combo-dot"></span>
            </div>
          </div>

          <!-- Bloque 2: Promociones activas -->
          <div class="promos-section">
            <h2>🎁 Promociones activas</h2>
            <div class="promo-carousel" id="promoCarousel">
              <div class="promo-card">☕ 15% OFF con el código <span class="code">CAFETERITO</span></div>
              <div class="promo-card">🎉 2x1 en café frío todos los miércoles</div>
              <div class="promo-card">🚚 Envío gratis en pedidos desde $20.000</div>
              <div class="promo-card">🥤 Café frío + pastelito por solo $6.500</div>
            </div>

            <div class="dots" id="dotsContainer">
              <span class="dot active-dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
            </div>
          </div>

        </div>
      </section>

      <section class="video-nosotros">
        <div class="video-contenido">
          <div class="video-texto">
            <h2>¿Quiénes somos?</h2>
            <p>
              Somos apasionados por el café artesanal. Trabajamos directamente con productores locales para ofrecerte
              una experiencia auténtica y responsable. Conoce más sobre nuestro origen y valores en este video.
            </p>
          </div>
          <div class="video-container">
            <iframe 
              src="https://www.youtube.com/embed/ID_DEL_VIDEO" 
              title="Quiénes somos"
              frameborder="0" 
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </section>

      <section class="beneficios">
        <h2>¿Por qué elegir MokaPop?</h2>
        <div class="beneficios-grid">
          <div class="beneficio">
            <i class="fa-solid fa-truck"></i>
            <h3>Envío Gratis</h3>
            <p>¡Sin monto mínimo!. Todos nuestros productos tienen envío gratis.</p>
          </div>
          <div class="beneficio">
            <i class="fa-solid fa-mug-saucer"></i>
            <h3>Café Orgánico</h3>
            <p>Granos seleccionados de cultivos sostenibles.</p>
          </div>
          <div class="beneficio">
            <i class="fa-solid fa-lock"></i>
            <h3>Seguridad al comprar</h3>
            <p>Compra desde casa y recibe tu bebida en el menor tiempo récord posible, y además, paga de manera segura por medio de nuestras pasarelas de pago.</p>
          </div>
          <div class="beneficio">
            <img src="./img/nescafe.png" alt="Apoyo Local">
            <h3>Café 100% Colombiano</h3>
            <p>Para preparar tu bebida, utilizamos <b>Nescafé</b>, café 100% Colombiano.</p>
          </div>
        </div>
      </section>

      <section class="galeria">
        <h2>Galería de Café</h2>
        <div class="carrusel">
          <div class="carrusel-imagenes">
            <img src="./img/1gc.png" class="carrusel-img activa" alt="Café 1">
            <img src="./img/2gc.png" class="carrusel-img" alt="Café 2">
            <img src="./img/3gc.png" class="carrusel-img" alt="Café 3">
          </div>
          <button class="flecha izquierda">&#10094;</button>
          <button class="flecha derecha">&#10095;</button>
          <div class="indicadores">
            <span class="punto activo"></span>
            <span class="punto"></span>
            <span class="punto"></span>
          </div>
        </div>
      </section>

        <section class="newsletter-section">
          <h2>📬 Únete a nuestro boletín</h2>
          <p>Recibe descuentos exclusivos, novedades y más directo en tu correo.</p>

          <form id="newsletterForm" class="newsletter-form">
            <input type="text" placeholder="Tu nombre" name="name" required>
            <input type="email" placeholder="Tu correo electrónico" name="email" required>
            <button type="submit">Suscribirme</button>
          </form>

          <p id="newsletterMsg" class="newsletter-msg"></p>
        </section>


        <section class="reseñas-section">
            <h2>Lo que dicen nuestros clientes</h2>
            <div class="reseñas-container">
            <div class="reseña">
                <img src="./img/cafe.png" alt="R1">
                <div class="nombre">Carlos M.</div>
                <div class="texto">“El mejor café artesanal que he probado. Aroma intenso y sabor espectacular.”</div>
                <div class="estrella">★★★★★</div>
            </div>
            <div class="reseña">
                <img src="./img/cafe.png" alt="R2">
                <div class="nombre">Lucía R.</div>
                <div class="texto">“Excelente servicio y café de primera calidad. ¡Repetiré sin duda!”</div>
                <div class="estrella">★★★★☆</div>
            </div>
            <div class="reseña">
                <img src="./img/cafe.png" alt="R3">
                <div class="nombre">Andrés G.</div>
                <div class="texto">“Me encantó el empaque ecológico. Gran detalle.”</div>
                <div class="estrella">★★★★★</div>
            </div>
            </div>
        </section>

        <section class="faq-section">
            <h2><i class="fa-regular fa-circle-question"></i> Preguntas Frecuentes</h2>
            <div class="faq-item">
            <div class="faq-question">¿Qué es MokaPop?</div>
            <div class="faq-answer" style="text-align: justify;"><b>MokaPop o MokaPop Mompox</b>, es una marca comercial de <a href="https://scolboux.ct.ws" target="_blank">SCOLBOUX COLOMBIA S.A.S</a>, dedicada única y exclusivamente a la preparación y venta de café listo para consumir (frío/caliente). Cumple con su actividad económica establecida en el código CIIU 4711 “Comercio al por menor en establecimientos no especializados con surtido compuesto principalmente por alimentos, bebidas (alcohólicas y no alcohólicas) o tabaco”.</div>
            </div>
            <div class="faq-item">
            <div class="faq-question">¿Dónde están ubicados?</div>
            <div class="faq-answer">Nuestra Ubicación y Área de Servicios es en <b>Mompox, Bolívar (CR 2 #11-63)</b>; solo ofrecemos nuestros servicios en la Zona Urbana de nuestra ubicación.</div>
            </div>
            <div class="faq-item">
            <div class="faq-question">¿Puedo pagar por Nequi?</div>
            <div class="faq-answer" style="text-align: justify;">Si, puedes pagar por <b>Nequi</b>; también puedes pagar por <b>PSE, Tarjeta de Debito o Credito, Daviplata, Efectivo, Efectivo por convenios (Efecty, Banco de Bogotá. Bancolombia), y con datáfono (contra entrega).</b> Gracias a nuestras Pasarelas de Pago: ePayco, PayU CO, Redeban.</div>
            </div>
            <div class="faq-item">
            <div class="faq-question">¿Puedo recoger mi pedido personalmente?</div>
            <div class="faq-answer">Lamentablemente <b>NO</b>. Debido a nuestros <a href="">Términos y Condiciones</a> no es posible.</div>
            </div>
            <div class="faq-item">
            <div class="faq-question">¿Puedo hacer pedidos por WhatsApp?</div>
            <div class="faq-answer">Lamentablemente <b>NO</b>. Única y exclusivamente puedes realizar tus pedidos en nuestro sitio web: <a href="">https://mokapop.cafe.co</a></div>
            </div>
        </section>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script> 
          (function () {
            const comboSlides = document.querySelectorAll('.combo-slide');
            const comboDots = document.querySelectorAll('.combo-dot');
            let comboIndex = 0;

            function showCombo(index) {
              comboSlides.forEach((slide, i) => {
                slide.classList.remove('active-slide');
                if (i === index) slide.classList.add('active-slide');
              });

              comboDots.forEach((dot, i) => {
                dot.classList.remove('active-dot');
                if (i === index) dot.classList.add('active-dot');
              });

              comboIndex = index;
            }

            function cycleCombos() {
              const next = (comboIndex + 1) % comboSlides.length;
              showCombo(next);
            }

            window.addEventListener('DOMContentLoaded', () => {
              showCombo(comboIndex);
              let comboTimer = setInterval(cycleCombos, 5000);

              comboDots.forEach((dot, i) => {
                dot.addEventListener('click', () => {
                  clearInterval(comboTimer);
                  showCombo(i);
                  comboTimer = setInterval(cycleCombos, 5000);
                });
              });
            });
          })();
        </script>

      <script>
              // Carrusel de promociones
        (function () {
          const cards = document.querySelectorAll('.promo-card');
          const dots = document.querySelectorAll('.dot');
          let current = 0;

          function showPromo(index) {
            cards.forEach((card, i) => {
              card.classList.remove('active');
              if (i === index) card.classList.add('active');
            });

            dots.forEach((dot, i) => {
              dot.classList.remove('active-dot');
              if (i === index) dot.classList.add('active-dot');
            });

            current = index;
          }

          function cyclePromos() {
            const next = (current + 1) % cards.length;
            showPromo(next);
          }

          showPromo(current);
          let interval = setInterval(cyclePromos, 5000);

          dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
              showPromo(index);
              clearInterval(interval);
              interval = setInterval(cyclePromos, 5000);
            });
          });
        })();
      </script>

      <script>
        const imagenes = document.querySelectorAll('.carrusel-img');
        const puntos = document.querySelectorAll('.punto');
        let indice = 0;

        function mostrarImagen(nuevaIndice) {
          imagenes.forEach(img => img.classList.remove('activa'));
          puntos.forEach(p => p.classList.remove('activo'));
          imagenes[nuevaIndice].classList.add('activa');
          puntos[nuevaIndice].classList.add('activo');
          indice = nuevaIndice;
        }

        document.querySelector('.flecha.derecha').addEventListener('click', () => {
          let nuevo = (indice + 1) % imagenes.length;
          mostrarImagen(nuevo);
        });

        document.querySelector('.flecha.izquierda').addEventListener('click', () => {
          let nuevo = (indice - 1 + imagenes.length) % imagenes.length;
          mostrarImagen(nuevo);
        });

        puntos.forEach((punto, i) => {
          punto.addEventListener('click', () => {
            mostrarImagen(i);
          });
        });

        // Inicializar
        mostrarImagen(0);
      </script>

      <script>
        const form = document.getElementById('newsletterForm');
        const msg = document.getElementById('newsletterMsg');

        form.addEventListener('submit', function (e) {
          e.preventDefault();
          msg.innerHTML = '<i class="fa-regular fa-face-smile-beam"></i> ¡Gracias por suscribirte! Pronto recibirás noticias.';

          // Aquí podrías enviar los datos a tu backend, Google Sheets o Mailchimp, etc.
          form.reset();
        });
      </script>

          <script>
            // Animación desplegable de FAQ
            document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                const parent = item.parentNode;
                parent.classList.toggle('active');
            });
            });
          </script>

    </main>
    
    <?php include './footer.php'; ?>
</body>
</html>
