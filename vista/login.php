<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HealthCore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>


<body class="d-flex align-items-center min-vh-100 bg-light">
    <!-- Contenedor principal -->
    <main class="container">
        <!-- Fila centrada horizontalmente -->
        <div class="row justify-content-center">
            <!-- Estructura del recuadro de inicio de sesión -->
            <div class="col-md-4">
                <!-- Controla el ancho del recuadro -->
                <div class="text-center mt-5 mb-5">
                    <!-- Encabezado del login -->
                    <h1 class="logo-text text-dark">HealthCore</h1>
                    <p class="text-muted small">INICIO DE SESIÓN</p>
                </div>

                <form action="index.php?accion=procesarLogin" method="post" class="bg-white p-4 shadow-sm">
                    <div class="mb-4">
                        <!-- Campo usuario -->
                        <label class="form-label small">USUARIO</label>
                        <input type="text" name="usuario" class="form-control custom-input" required>
                    </div>
                    <div class="mb-4">
                        <!-- Campo contraseña -->
                        <label class="form-label small">CLAVE</label>
                        <input type="password" name="clave" class="form-control custom-input" required>
                    </div>
                    <!-- Botón de envío -->
                    <button type="submit" class="btn btn-dark w-100">Entrar</button>
                    <!-- btn-primary azul, danger rojo, success verde, info celeste, warning amarillo -->
                </form>
            </div>
        </div>
    </main>
</body>
</html>