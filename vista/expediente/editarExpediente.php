<?php
include __DIR__ . '/../layout/header.php';
?>

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h3>Editar Expediente Médico</h3>
        </div>
        <div class="card-body">
            <form method="post" action="index.php?accion=actualizarExpediente">
                
                <input type="hidden" name="idExpediente" value="<?= $expediente['idExpediente'] ?>">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Médico Tratante</label>
                        <select name="idMedico" class="form-select" required>
                            <option value="">Seleccione un médico...</option>
                            <?php foreach ($medicos as $m): ?>
                                <option value="<?= $m['idMedico'] ?>" 
                                    <?= ($m['idMedico'] == $expediente['idMedico']) ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($m['nombre']) . ' - ' . htmlspecialchars($m['especialidad']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Paciente</label>
                        <select name="idPaciente" class="form-select" required>
                            <option value="">Seleccione un paciente...</option>
                            <?php foreach ($pacientes as $p): ?>
                                <option value="<?= $p['idPaciente'] ?>" 
                                    <?= ($p['idPaciente'] == $expediente['idPaciente']) ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($p['nombre']) . ' ' . (isset($p['apellido']) ? htmlspecialchars($p['apellido']) : '') ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Fecha de Consulta</label>
                    <input type="date" name="fecha" class="form-control" 
                           value="<?= date('Y-m-d', strtotime($expediente['fecha'])) ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Diagnóstico</label>
                    <textarea name="diagnostico" class="form-control" rows="4" required><?= htmlspecialchars($expediente['diagnostico']) ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Tratamiento</label>
                    <textarea name="tratamiento" class="form-control" rows="4" required><?= htmlspecialchars($expediente['tratamiento']) ?></textarea>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="index.php?accion=listarExpedientes" class="btn btn-secondary me-md-2">Cancelar</a>
                    <button type="submit" class="btn btn-warning">Actualizar Expediente</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include __DIR__ . '/../layout/footer.php';
?>