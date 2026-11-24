<?php include "header.php"; ?>
    <main class="contenedor">
        <h1>Inscríbete</h1>
        <p>Llena el formulario para reservar tu lugar en Smash Clash CR 2026.</p>

        <!-- novalidate: así las validaciones las hace nuestro JavaScript y PHP, no el navegador -->
        <form action="enviar.php" method="POST" class="formulario" novalidate>
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre">

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo">

            <label for="telefono">Teléfono (8 dígitos):</label>
            <input type="tel" id="telefono" name="telefono" maxlength="8">

            <label for="edad">Edad (de 12 a 35 años):</label>
            <input type="number" id="edad" name="edad" min="12" max="35">

            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria">
                <option value="">Seleccione una categoría</option>
                <option value="Singles 1 vs 1">Singles 1 vs 1</option>
                <option value="Dobles 2 vs 2">Dobles 2 vs 2</option>
                <option value="Casual (principiantes)">Casual (principiantes)</option>
            </select>

            <label class="casilla">
                <input type="checkbox" id="reglamento" name="reglamento">
                Acepto el reglamento
            </label>

            <button type="submit" class="boton">Inscribirme</button>
        </form>

        <!-- Aquí JavaScript escribe los errores -->
        <div id="mensajes" class="mensajes"></div>

        <section class="preguntas">
            <h2>Preguntas frecuentes</h2>
            <div class="accordion">
                <div class="item">
                    <button class="titulo">¿Cuánto cuesta inscribirse?</button>
                    <div class="contenido"><p>La inscripción cuesta ₡3.000 por categoría y se paga el día del torneo, durante el check-in a partir de las 8:00 am.</p></div>
                </div>
                <div class="item">
                    <button class="titulo">¿Qué debo llevar?</button>
                    <div class="contenido"><p>Lleva tu cédula o carné de estudiante y tu control favorito (Pro Controller o similar). Las consolas y las pantallas las ponemos nosotros.</p></div>
                </div>
                <div class="item">
                    <button class="titulo">¿Cuál es la edad mínima?</button>
                    <div class="contenido"><p>Pueden participar jugadores de 12 a 35 años. Los menores de 18 deben venir acompañados de un adulto o presentar una autorización firmada.</p></div>
                </div>
                <div class="item">
                    <button class="titulo">¿Qué pasa si llueve o hay un problema técnico?</button>
                    <div class="contenido"><p>El torneo es bajo techo, así que la lluvia no lo afecta. Si falla una consola o se va la luz, el combate se repite desde el inicio y el horario se ajusta; avisaremos a todos en el salón.</p></div>
                </div>
            </div>
        </section>
    </main>
<?php include "footer.php"; ?>
