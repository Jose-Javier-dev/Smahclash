<?php include "header.php"; ?>
    <main>
        <!-- Portada con video de fondo (video + capa oscura + contenido) -->
        <section class="portada-video">
            <video class="video-fondo" autoplay muted loop playsinline poster="./img/poster.jpg">
                <source src="./video/fondo.mp4" type="video/mp4">
            </video>

            <div class="portada contenedor">
                <h1>Smash Clash CR 2026</h1>
                <p>El torneo presencial de Super Smash Bros. Ultimate donde la comunidad se mide en combate.</p>

                <ul class="info-evento">
                    <li>📅 Sábado 12 de diciembre de 2026</li>
                    <li>⏰ 9:00 am (puertas abren a las 8:00 am)</li>
                    <li>📍 Salón Comunal Central, San José, Costa Rica</li>
                </ul>

                <!-- Elemento nuevo: cuenta regresiva (la llena main.js) -->
                <h2 class="titulo-cuenta">El primer combate empieza en:</h2>
                <div class="cuenta" id="cuentaRegresiva">
                    <div class="caja"><span id="dias">00</span><small>Días</small></div>
                    <div class="caja"><span id="horas">00</span><small>Horas</small></div>
                    <div class="caja"><span id="minutos">00</span><small>Minutos</small></div>
                    <div class="caja segundos"><span id="segundos">00</span><small>Segundos</small></div>
                </div>

                <a href="contacto.php" class="boton">Inscríbete</a>
            </div>
        </section>

        <!-- Carrusel: lo más atractivo del torneo (imagen + texto en cada diapositiva) -->
        <section class="carrusel contenedor" id="carrusel">
            <div class="diapositiva activa">
                <img src="./img/trofeo.jpg" alt="Trofeo dorado con base verde que dice Smash Clash CR">
                <div class="texto-diapositiva">
                    <h2>🏆 Premios para los mejores</h2>
                    <p>El campeón de Singles se lleva ₡150.000 y este trofeo. Los finalistas de Dobles reciben medallas y premios de nuestros patrocinadores.</p>
                </div>
            </div>
            <div class="diapositiva">
                <img src="./img/combate.jpg" alt="Combate de cuatro jugadores en Super Smash Bros. Ultimate">
                <div class="texto-diapositiva">
                    <h2>🎮 Combates a toda velocidad</h2>
                    <p>Ocho estaciones con pantallas grandes, una tarima para las finales y comentaristas en vivo narrando cada combate.</p>
                </div>
            </div>
            <div class="diapositiva">
                <img src="./img/personajes.jpg" alt="Personajes de Super Smash Bros. Ultimate listos para pelear">
                <div class="texto-diapositiva">
                    <h2>⚔️ Tres categorías</h2>
                    <p>Singles 1 vs 1 para competir en serio, Dobles 2 vs 2 para jugar en equipo y Casual para quienes están empezando.</p>
                </div>
            </div>
            <div class="diapositiva">
                <img src="./img/comunidad.jpg" alt="Personajes de Smash Bros. reunidos sobre un acantilado al atardecer">
                <div class="texto-diapositiva">
                    <h2>🔥 Para ti, venga el nivel que venga</h2>
                    <p>Desde los 12 hasta los 35 años. Ven a conocer jugadores, aprender trucos y vivir un sábado de videojuegos.</p>
                </div>
            </div>

            <button class="flecha anterior" id="btnAnterior" aria-label="Diapositiva anterior">&#10094;</button>
            <button class="flecha siguiente" id="btnSiguiente" aria-label="Diapositiva siguiente">&#10095;</button>
        </section>

        <!-- El torneo en números -->
        <section class="seccion contenedor">
            <h2>El torneo en números</h2>
            <div class="cards">
                <article class="dato"><span class="numero">3</span><p>categorías</p></article>
                <article class="dato"><span class="numero">8</span><p>estaciones de juego</p></article>
                <article class="dato"><span class="numero">₡150.000</span><p>para el campeón</p></article>
                <article class="dato"><span class="numero">7</span><p>actividades en el día</p></article>
            </div>
        </section>

        <!-- Categorías -->
        <section class="seccion contenedor">
            <h2>Elige tu categoría</h2>
            <div class="cards">
                <article class="tarjeta tres">
                    <img src="./img/categoria-singles.jpg" alt="Dos controles de videojuego enfrentados, uno rojo y otro azul, con rayos de neón">
                    <h3>Singles 1 vs 1</h3>
                    <p>Un jugador contra otro. Para quienes quieren competir en serio y llegar a la gran final.</p>
                    <p class="responsable">Fase de grupos: 9:30 am</p>
                </article>
                <article class="tarjeta tres">
                    <img src="./img/categoria-dobles.jpg" alt="Dos equipos de dos controles, rojo contra azul, chocando con rayos de neón">
                    <h3>Dobles 2 vs 2</h3>
                    <p>Forma equipo con un amigo. Coordinación y comunicación valen más que el talento individual.</p>
                    <p class="responsable">Eliminación directa: 1:00 pm</p>
                </article>
                <article class="tarjeta tres">
                    <img src="./img/categoria-casual.jpg" alt="Cuatro amigos celebrando mientras juegan videojuegos en una sala con luces de neón">
                    <h3>Casual (principiantes)</h3>
                    <p>Sin presión. Ambiente relajado, partidas amistosas y consejos de jugadores con experiencia.</p>
                    <p class="responsable">Torneo casual: 2:30 pm</p>
                </article>
            </div>
        </section>

        <!-- Programa resumido -->
        <section class="seccion contenedor">
            <h2>Los momentos clave</h2>
            <div class="cards">
                <article class="tarjeta tres">
                    <span class="hora">9:00 am</span>
                    <h3>Ceremonia de inicio</h3>
                    <p>Bienvenida, reglas del torneo y presentación de patrocinadores.</p>
                </article>
                <article class="tarjeta tres">
                    <span class="hora">9:30 am</span>
                    <h3>Fase de grupos Singles</h3>
                    <p>Arrancan los primeros combates y empieza la lucha por clasificar.</p>
                </article>
                <article class="tarjeta tres">
                    <span class="hora">4:00 pm</span>
                    <h3>Gran final y premiación</h3>
                    <p>Los mejores se enfrentan en la tarima y se entregan los premios.</p>
                </article>
            </div>
            <p class="centrado"><a href="servicios.php" class="boton">Ver programa completo</a></p>
        </section>

        <!-- Banner final -->
        <section class="banner">
            <div class="contenedor">
                <h2>¡Los cupos son limitados!</h2>
                <p>Asegura tu lugar en Smash Clash CR 2026 y demuestra tu nivel.</p>
                <a href="contacto.php" class="boton">Inscríbete ahora</a>
            </div>
        </section>
    </main>
<?php include "footer.php"; ?>
