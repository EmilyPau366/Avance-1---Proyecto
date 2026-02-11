<?php include __DIR__ . '/../layout/header.php'; ?>

<link rel="stylesheet" href="/css/estilos.css">

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-start">
            
            <div class="mb-5">
                <h2><?= isset($medico) ? 'Editar Médico' : 'Registrar Médico' ?></h2>
            </div>

            <form method="post" action="index.php?accion=<?= isset($medico) ? 'actualizarMedico' : 'guardarMedico' ?>">
                
                <?php if (isset($medico)): ?>
                    <input type="hidden" name="idMedicos" value="<?= $medico['idMedicos'] ?>">
                <?php endif; ?>

                <div class="mb-4">
                    <label class="luxury-label">Número de Cédula</label>
                    <input type="text" name="cedula" class="form-control luxury-input" 
                           value="<?= $medico['cedula'] ?? '' ?>" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="luxury-label">Nombres</label>
                        <input type="text" name="nombre" class="form-control luxury-input" 
                               value="<?= $medico['nombre'] ?? '' ?>" required>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label class="luxury-label">Apellidos</label>
                        <input type="text" name="apellido" class="form-control luxury-input" 
                               value="<?= $medico['apellido'] ?? '' ?>" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="luxury-label">Correo Electrónico</label>
                    <input type="email" name="correo" class="form-control luxury-input" 
                           value="<?= $medico['correo'] ?? '' ?>" required>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-4">
                        <label class="luxury-label">Edad</label>
                        <input type="number" name="edad" class="form-control luxury-input" 
                               value="<?= $medico['edad'] ?? '' ?>" required>
                    </div>
                    <div class="col-md-8 mb-4">
                        <label class="luxury-label">Especialidad</label>
                        <input type="text" name="especialidad" class="form-control luxury-input" 
                               value="<?= $medico['especialidad'] ?? '' ?>" required>
                    </div>
                </div>

                <div class="d-grid gap-3 mt-3">
                    <button type="submit" class="btn btn-luxury">
                        <?= isset($medico) ? 'GUARDAR CAMBIOS' : 'CREAR REGISTRO' ?>
                    </button>
                    
                    <a href="index.php?accion=listarMedico" class="text-dark text-decoration-none fw-bold mt-2" style="letter-spacing: 1px; font-size: 0.9rem;">
                        ← CANCELAR Y VOLVER
                    </a>
                </div>
            </form>

        </div>
    </div>
</main>

<?php include __DIR__ . '/../layout/footer.php'; ?>