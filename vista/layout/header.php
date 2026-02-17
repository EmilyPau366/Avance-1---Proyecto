<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leccion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100"> 
    <header class="mi-header-footer text-white py-3 mb-4">
        <div class="container text-center">
            <h1 class="h1 mb-2">HealthCore</h1>
            <!--Mensaje de Bienvenida -->
            <?php if(isset($_SESSION['usuario'])): ?>
                <p class="mb-1">Bienvenido al sistema,
                    <strong><?php echo $_SESSION['usuario']; ?></strong>
                </p>
            <?php endif; ?>

            <!--Alerta -->
            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php
                        echo $_SESSION['error']; 
                        unset($_SESSION['error']);
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
       
        <nav class="nav justify-content-center">
            <a class="nav-link text-white px-3" href="../index.php?accion=inicio">INICIO</a>
            <a class="nav-link text-white px-3" href="../index.php?accion=listarPacientes">PACIENTES</a>
            <a class="nav-link text-white px-3" href="../index.php?accion=listarMedico">MEDICOS</a>
            <a class="nav-link text-white px-3" href="index.php?accion=listarCita">CITAS</a>
            <a class="nav-link text-white px-3" href="index.php?accion=listarExpedientes">EXPEDIENTE</a> 
        </nav>
  
<!--Carrusel de información -->
        </div>

    </header>