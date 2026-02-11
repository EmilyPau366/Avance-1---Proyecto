<?php
include __DIR__ . '/../layout/header.php';
?>

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h3>Registrar Nuevo Expediente</h3>
        </div>
        <div class="card-body">
            <form method="post" action="index.php?accion=guardarExpediente">
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Médico Tratante</label>
                        <select name="idMedicos" class="form-select" required>
                            <option value="">Seleccione un médico...</option>
                            <?php if (!empty($medicos)): ?>
                                <?php foreach ($medicos as $m): ?>
                                    <option value="<?= $m['idMedicos'] ?>">
                                        <?= htmlspecialchars($m['nombre']) . ' - ' . htmlspecialchars($m['especialidad']) ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Paciente</label>
                        <select name="idPaciente" class="form-select" required>
                            <option value="">Seleccione un paciente...</option>
                            <?php if (!empty($pacientes)): ?>
                                <?php foreach ($pacientes as $p): ?>
                                    <option value="<?= $p['idPaciente'] ?>">
                                        <?= htmlspecialchars($p['nombre']) . ' ' . (isset($p['apellido']) ? htmlspecialchars($p['apellido']) : '') ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Fecha de Consulta</label>
                    <input type="date" name="fecha" class="form-control" value="<?= date('Y-m-d') ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Diagnóstico</label>
                    <textarea name="diagnostico" class="form-control" rows="4" placeholder="Detalle el diagnóstico del paciente..." required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Tratamiento</label>
                    <textarea name="tratamiento" class="form-control" rows="4" placeholder="Detalle el tratamiento a seguir..." required></textarea>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="index.php?accion=listarExpedientes" class="btn btn-secondary me-md-2">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar Expediente</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include __DIR__ . '/../layout/footer.php';
?>