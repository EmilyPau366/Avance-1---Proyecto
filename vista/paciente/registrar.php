<?php include_once __DIR__ . '/../layout/header.php'; ?>

<link rel="stylesheet" href="/css/estilos.css">


<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-start">
            
            <div class="mb-5">
                <h2>Registrar Paciente</h2>
            </div>

            <form action="index.php?accion=guardarPaciente" method="POST">

                <div class="mb-4">
                    <label class="luxury-label">Número de Cédula</label>
                    <input type="text" name="cedula" class="form-control luxury-input" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="luxury-label">Nombres</label>
                        <input type="text" name="nombre" class="form-control luxury-input" required>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label class="luxury-label">Apellidos</label>
                        <input type="text" name="apellido" class="form-control luxury-input" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="luxury-label">Teléfono de Contacto</label>
                    <input type="text" name="telefono" class="form-control luxury-input" required>
                </div>

                <div class="mb-5">
                    <label class="luxury-label">Correo Electrónico</label>
                    <input type="email" name="correo" class="form-control luxury-input" required>
                </div>

                <div class="d-grid gap-3">
                    <button type="submit" class="btn btn-luxury">
                        CREAR REGISTRO
                    </button>
                    
                    <a href="index.php?accion=listarPacientes" 
                       class="text-dark text-decoration-none fw-bold mt-2">
                        ← CANCELAR Y VOLVER
                    </a>
                </div>
            </form>

        </div>
    </div>
</main>

<?php include_once __DIR__ . '/../layout/footer.php'; ?>