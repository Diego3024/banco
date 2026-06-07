<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="Assets/styles1.css">
</head>
<body>
    <div class="card">
        <h1>Bienvenido, <span><?php echo htmlspecialchars($nombre_usuario); ?></span> 👋</h1>
        <p>Has iniciado sesión correctamente.</p>
        <form method="POST">
            <button type="submit" name="logout">Cerrar sesión</button>
        </form>
    </div>
</body>
</html>