<?php
// session_start() va primero: guarda datos para usarlos en gracias.php
session_start();

// Si alguien entra a enviar.php sin enviar el formulario, lo regresamos
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: contacto.php");
  exit;
}

$errores = [];
$categorias = ["Singles 1 vs 1", "Dobles 2 vs 2", "Casual (principiantes)"];

// Recibir los datos (trim quita espacios, ?? evita errores si no existen)
$nombre     = trim($_POST["nombre"] ?? "");
$correo     = trim($_POST["correo"] ?? "");
$telefono   = trim($_POST["telefono"] ?? "");
$edad       = trim($_POST["edad"] ?? "");
$categoria  = $_POST["categoria"] ?? "";
$reglamento = isset($_POST["reglamento"]);   // una casilla marcada llega; desmarcada no llega

// Validaciones
if ($nombre === "") $errores[] = "El nombre completo es obligatorio.";
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) $errores[] = "El correo no es válido.";
if (!preg_match("/^[0-9]{8}$/", $telefono)) $errores[] = "El teléfono debe tener exactamente 8 dígitos.";
if (!ctype_digit($edad) || (int)$edad < 12 || (int)$edad > 35) $errores[] = "La edad debe estar entre 12 y 35 años.";
if (!in_array($categoria, $categorias)) $errores[] = "Seleccione una categoría.";
if (!$reglamento) $errores[] = "Debe aceptar el reglamento.";

// Si todo está bien: guardar en la sesión y mandar a gracias.php
if (count($errores) === 0) {
  $_SESSION["nombre"] = $nombre;
  $_SESSION["categoria"] = $categoria;
  header("Location: gracias.php");
  exit;
}
?>
<?php include "header.php"; ?>
<main class="contenedor">
  <h1>Revise el formulario</h1>
  <ul class="errores">
    <?php foreach ($errores as $error) { echo "<li>" . htmlspecialchars($error) . "</li>"; } ?>
  </ul>
  <a href="contacto.php" class="boton">Volver al formulario</a>
</main>
<?php include "footer.php"; ?>
