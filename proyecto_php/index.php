<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Plataforma Educativa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Plataforma Educativa Central</h1>
        
        <nav>
            <a href="index.php?seccion=Inicio">Inicio</a>
            <a href="index.php?seccion=Unidades">Unidades</a>
            <a href="index.php?seccion=Recursos">Recursos</a>
            <a href="index.php?seccion=Calificaciones">Calificaciones</a>
            <a href="contacto.php">Contacto</a>
        </nav>

        <div class="mensaje">
            <?php
            if (isset($_GET['seccion'])) {
                $seccion = htmlspecialchars($_GET['seccion']);
                echo "<h2>Sección activa: $seccion</h2>";
                echo "<p>Bienvenido al módulo de <strong>$seccion</strong>. Aquí encontrarás toda la información estructurada para el desarrollo de esta área de estudio correspondiente al período lectivo actual.</p>";
            } else {
                echo "<h2>Bienvenido al Sistema</h2>";
                echo "<p>Por favor, selecciona una sección en el menú de navegación superior para acceder al contenido académico.</p>";
            }
            ?>
        </div>
    </div>
    <footer>
        <p>Andy Miranda 2026</p>
    </footer>
</body>
</html>