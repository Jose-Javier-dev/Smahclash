<?php
session_start();

// Si no hay datos en la sesión, la persona no se inscribió: la mandamos al formulario
if (!isset($_SESSION["nombre"], $_SESSION["categoria"])) {
  header("Location: contacto.php");
  exit;
}

$nombre = $_SESSION["nombre"];
$categoria = $_SESSION["categoria"];
?>
<?php include "header.php"; ?>
<main class="contenedor">
  <h1>¡Inscripción confirmada!</h1>
  <p>Gracias, <strong><?php echo htmlspecialchars($nombre); ?></strong>. Quedaste inscrito en la categoría <strong><?php echo htmlspecialchars($categoria); ?></strong>.</p>
  <p>Te esperamos el sábado 12 de diciembre de 2026 en el Salón Comunal Central. Las puertas abren a las 8:00 am.</p>
  <a href="index.php" class="boton">Volver al inicio</a>
</main>
<?php include "footer.php"; ?>
