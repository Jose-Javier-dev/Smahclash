/* ===== 1. Menú hamburguesa ===== */
const btnMenu = document.querySelector("#btnMenu");
const menu = document.querySelector(".menu");

btnMenu.addEventListener("click", () => {
  menu.classList.toggle("abierto");
  btnMenu.classList.toggle("activo");    // anima las rayitas
});

// cerrar el menú al hacer clic en un enlace
document.querySelectorAll(".menu a").forEach(enlace => {
  enlace.addEventListener("click", () => {
    menu.classList.remove("abierto");
    btnMenu.classList.remove("activo");
  });
});


/* ===== 2. Accordion (preguntas frecuentes) ===== */
const titulos = document.querySelectorAll(".accordion .titulo");

titulos.forEach(titulo => {
  titulo.addEventListener("click", () => {
    const item = titulo.parentElement;

    // cerrar los demás
    document.querySelectorAll(".accordion .item").forEach(otro => {
      if (otro !== item) otro.classList.remove("activo");
    });

    item.classList.toggle("activo");
  });
});


/* ===== 3. Cards del programa, generadas desde un arreglo ===== */
const programa = [
  { hora: "8:00 am",  actividad: "Apertura y check-in",    responsable: "Equipo de logística", detalle: "Registro de jugadores, pago de la inscripción y entrega de gafetes." },
  { hora: "9:00 am",  actividad: "Ceremonia de inicio",    responsable: "Organizador general", detalle: "Bienvenida, explicación del reglamento y presentación de patrocinadores." },
  { hora: "9:30 am",  actividad: "Fase de grupos Singles", responsable: "Jueces del torneo",   detalle: "Combates 1 vs 1 en grupos. Los mejores de cada grupo avanzan." },
  { hora: "12:00 md", actividad: "Almuerzo",               responsable: "Pixel Café",          detalle: "Descanso para comer y convivir con otros jugadores." },
  { hora: "1:00 pm",  actividad: "Dobles 2 vs 2",          responsable: "Jueces del torneo",   detalle: "Equipos de dos jugadores compiten en eliminación directa." },
  { hora: "2:30 pm",  actividad: "Torneo Casual",          responsable: "Comunidad Smash",     detalle: "Categoría para principiantes, con consejos de jugadores expertos." },
  { hora: "4:00 pm",  actividad: "Gran final y premiación", responsable: "Radio Joven 98",     detalle: "Final en tarima con comentaristas y entrega de premios." }
];

const contenedor = document.querySelector("#cards");

function pintarCards(lista) {
  contenedor.innerHTML = "";           // limpiar antes de dibujar
  lista.forEach(item => {
    const article = document.createElement("article");
    article.classList.add("tarjeta");
    article.innerHTML = `
      <span class="hora">${item.hora}</span>
      <h3>${item.actividad}</h3>
      <p>${item.detalle}</p>
      <p class="responsable">Responsable: ${item.responsable}</p>
    `;
    contenedor.appendChild(article);
  });
}

if (contenedor) pintarCards(programa);   // solo en la página que tiene #cards


/* ===== 4. Carrusel de la portada ===== */
const diapositivas = document.querySelectorAll(".diapositiva");

if (diapositivas.length > 0) {           // solo en la página que tiene carrusel
  let actual = 0;                        // posición de la diapositiva visible

  function mostrar(numero) {
    diapositivas[actual].classList.remove("activa");
    // el % hace que después de la última vuelva a la primera (y viceversa)
    actual = (numero + diapositivas.length) % diapositivas.length;
    diapositivas[actual].classList.add("activa");
  }

  document.querySelector("#btnSiguiente").addEventListener("click", () => mostrar(actual + 1));
  document.querySelector("#btnAnterior").addEventListener("click", () => mostrar(actual - 1));

  setInterval(() => mostrar(actual + 1), 5000);   // avanza sola cada 5 segundos
}


/* ===== 5. ELEMENTO NUEVO: cuenta regresiva ===== */
const cuenta = document.querySelector("#cuentaRegresiva");

if (cuenta) {                            // solo en la página que tiene la cuenta
  // Fecha del torneo: los meses empiezan en 0, por eso diciembre es 11
  const fechaEvento = new Date(2026, 11, 12, 9, 0, 0);

  function actualizar() {
    const diferencia = fechaEvento - Date.now();   // resta = milisegundos que faltan

    // Si ya llegó la hora: detener el reloj y avisar
    if (diferencia <= 0) {
      clearInterval(reloj);
      cuenta.classList.add("terminado");
      cuenta.textContent = "¡El torneo ya comenzó!";
      return;
    }

    // Convertir milisegundos a días, horas, minutos y segundos
    const dias     = Math.floor(diferencia / (1000 * 60 * 60 * 24));
    const horas    = Math.floor(diferencia / (1000 * 60 * 60)) % 24;
    const minutos  = Math.floor(diferencia / (1000 * 60)) % 60;
    const segundos = Math.floor(diferencia / 1000) % 60;

    // Escribir en las cajas; padStart agrega un 0 para mostrar "05" y no "5"
    document.querySelector("#dias").textContent     = String(dias).padStart(2, "0");
    document.querySelector("#horas").textContent    = String(horas).padStart(2, "0");
    document.querySelector("#minutos").textContent  = String(minutos).padStart(2, "0");
    document.querySelector("#segundos").textContent = String(segundos).padStart(2, "0");
  }

  const reloj = setInterval(actualizar, 1000);   // repetir cada 1000 ms = 1 segundo
  actualizar();                                  // llamarla ya, para no esperar 1 segundo
}


/* ===== 6. Validación del formulario de inscripción ===== */
const form = document.querySelector(".formulario");

if (form) {                              // solo en contacto
  form.addEventListener("submit", (e) => {
    const nombre     = form.nombre.value.trim();
    const correo     = form.correo.value.trim();
    const telefono   = form.telefono.value.trim();
    const edad       = form.edad.value.trim();
    const categoria  = form.categoria.value;
    const reglamento = form.reglamento.checked;
    let errores = [];

    if (nombre === "") errores.push("El nombre completo es obligatorio.");

    // texto + @ + texto + punto + texto, sin espacios
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correo)) errores.push("El correo no es válido.");

    // exactamente 8 números del 0 al 9
    if (!/^[0-9]{8}$/.test(telefono)) errores.push("El teléfono debe tener exactamente 8 dígitos.");

    if (edad === "" || Number(edad) < 12 || Number(edad) > 35) errores.push("La edad debe estar entre 12 y 35 años.");
    if (categoria === "") errores.push("Seleccione una categoría.");
    if (!reglamento) errores.push("Debe aceptar el reglamento.");

    if (errores.length > 0) {
      e.preventDefault();                // detiene el envío al servidor
      document.querySelector("#mensajes").innerHTML =
        "<ul>" + errores.map(error => `<li>${error}</li>`).join("") + "</ul>";
    }
  });
}
