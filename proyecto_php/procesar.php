<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Procesados - Plataforma Educativa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Reporte de Datos Procesados (POST)</h1>
        <nav>
            <a href="index.php">Volver al Panel Principal</a>
            <a href="contacto.php">Ingresar Nuevo Registro</a>
        </nav>

        <div class="mensaje">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombre = htmlspecialchars($_POST['nombre']);
                $correo = htmlspecialchars($_POST['correo']);
                $carrera = htmlspecialchars($_POST['carrera']);
                $asunto = htmlspecialchars($_POST['asunto']);
                $mensaje = htmlspecialchars($_POST['mensaje']);
                $fecha = date("d/m/Y - H:i:s");

                echo "<h2>Resumen de Recepción de Datos</h2>";
                echo "<p><strong>Fecha de Registro:</strong> $fecha</p>";
                echo "<p><strong>Estudiante:</strong> $nombre</p>";
                echo "<p><strong>Correo de Contacto:</strong> $correo</p>";
                echo "<p><strong>Programa Académico:</strong> $carrera</p>";
                echo "<p><strong>Asunto:</strong> $asunto</p>";
                echo "<p><strong>Mensaje Ingresado:</strong><br> $mensaje</p>";
            } else {
                echo "<h2>Acceso Denegado</h2>";
                echo "<p>No se han detectado datos de envío a través del formulario oficial. Por favor, regrese a la pestaña de contacto.</p>";
            }
            ?>
        </div>
    </div>
    <footer>
        <p>Andy Miranda 2026</p>
    </footer>
</body>
</html>