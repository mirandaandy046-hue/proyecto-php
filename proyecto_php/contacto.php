<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Plataforma Educativa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Formulario de Registro Institucional</h1>
        <nav>
            <a href="index.php">Volver al Panel Principal</a>
        </nav>

        <form action="procesar.php" method="POST">
            <label for="nombre">Nombre Completo del Estudiante:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="carrera">Carrera o Programa:</label>
            <select id="carrera" name="carrera" required>
                <option value="">Seleccione una opción</option>
                <option value="Ingeniería de Software">Ingeniería de Software</option>
                <option value="Sistemas Computacionales">Sistemas Computacionales</option>
                <option value="Diseño Gráfico">Diseño Gráfico</option>
                <option value="Administración de Empresas">Administración de Empresas</option>
            </select>

            <label for="asunto">Asunto de la Consulta:</label>
            <input type="text" id="asunto" name="asunto" required>

            <label for="mensaje">Detalle de la Solicitud:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

            <button type="submit">Enviar Información</button>
        </form>
    </div>
    <footer>
        <p>Andy Miranda 2026</p>
    </footer>
</body>
</html>