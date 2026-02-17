<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-4">
    <h2>Registrar Cita Médica</h2>

    <form method="post" action="index.php?accion=guardarCita">

        <div class="mb-3">
            <label class="form-label">Paciente</label>
            <select name="idPaciente" class="form-select" required>
                <option value="">Seleccione</option>
                <?php foreach ($pacientes as $p): ?>
                    <option value="<?= $p['idPaciente'] ?>">
                        <?= $p['nombre'] . ' ' . $p['apellido'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Médico</label>
            <select name="idMedico" class="form-select" required>
                <option value="">Seleccione</option>
                <?php foreach ($medicos as $m): ?>
                    <option value="<?= $m['idMedicos'] ?>">
                        <?= $m['nombre'] . ' - ' . $m['especialidad'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Fecha</label>
                <input type="date" name="fecha" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Hora</label>
                <input type="time" name="hora" class="form-control" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Motivo</label>
            <textarea name="motivo" class="form-control" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">
            Guardar Cita
        </button>

        <a href="index.php?accion=listarCita" class="btn btn-secondary">
            Cancelar
        </a>
    </form>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
