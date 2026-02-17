<?php include_once __DIR__ . '/../layout/header.php'; ?>

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-start">
            
            <div class="mb-5">
                <h2>Editar Paciente</h2>
            </div>

            <form action="index.php?accion=actualizarPaciente" method="POST">

                <!-- ID oculto -->
                <input type="hidden" name="idPaciente" 
                       value="<?= $paciente['idPaciente'] ?>">

                <div class="mb-4">
                    <label class="luxury-label">Número de Cédula</label>
                    <input type="text" name="cedula" 
                           class="form-control luxury-input"
                           value="<?= $paciente['cedula'] ?>" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="luxury-label">Nombres</label>
                        <input type="text" name="nombre" 
                               class="form-control luxury-input"
                               value="<?= $paciente['nombre'] ?>" required>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label class="luxury-label">Apellidos</label>
                        <input type="text" name="apellido" 
                               class="form-control luxury-input"
                               value="<?= $paciente['apellido'] ?>" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="luxury-label">Teléfono de Contacto</label>
                    <input type="text" name="telefono" 
                           class="form-control luxury-input"
                           value="<?= $paciente['telefono'] ?>" required>
                </div>

                <div class="mb-5">
                    <label class="luxury-label">Correo Electrónico</label>
                    <input type="email" name="correo" 
                           class="form-control luxury-input"
                           value="<?= $paciente['correo'] ?>" required>
                </div>

                <div class="d-grid gap-3">
                    <button type="submit" class="btn btn-luxury">
                        GUARDAR CAMBIOS
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
