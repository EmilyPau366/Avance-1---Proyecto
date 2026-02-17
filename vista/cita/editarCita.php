<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-4">
    <h2>Editar Cita Médica</h2>

    <form method="POST" action="index.php?accion=actualizarCita">

        <!-- ID oculto -->
        <input type="hidden" name="idCita" value="<?= $cita['idCita'] ?>">

        <!-- PACIENTE -->
        <div class="mb-3">
            <label class="form-label">Paciente</label>
            <select name="idPaciente" class="form-select" required>
                <option value="">Seleccione</option>
                <?php foreach ($pacientes as $p): ?>
                    <option value="<?= $p['idPaciente'] ?>"
                        <?= $p['idPaciente'] == $cita['idPaciente'] ? 'selected' : '' ?>>
                        <?= $p['nombre'] . ' ' . $p['apellido'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- MÉDICO -->
        <div class="mb-3">
            <label class="form-label">Médico</label>
            <select name="idMedico" class="form-select" required>
                <option value="">Seleccione</option>
                <?php foreach ($medicos as $m): ?>
                    <option value="<?= $m['idMedicos'] ?>"
                        <?= $m['idMedicos'] == $cita['idMedico'] ? 'selected' : '' ?>>
                        <?= $m['nombre'] . ' - ' . $m['especialidad'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- FECHA Y HORA -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Fecha</label>
                <input type="date"
                       name="fecha"
                       value="<?= $cita['fecha'] ?>"
                       class="form-control"
                       required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Hora</label>
                <input type="time"
                       name="hora"
                       value="<?= $cita['hora'] ?>"
                       class="form-control"
                       required>
            </div>
        </div>

        <!-- MOTIVO -->
        <div class="mb-3">
            <label class="form-label">Motivo</label>
            <textarea name="motivo" 
                    class="form-control" 
                    required><?= $cita['motivo'] ?></textarea>
        </div>
        <!-- ESTADO -->
        <div class="mb-3">
            <label class="form-label">Estado</label>
            <select name="estado" class="form-select" required>
                <option value="Pendiente" <?= $cita['estado'] == 'Pendiente' ? 'selected' : '' ?>>Pendiente</option>
                <option value="Confirmada" <?= $cita['estado'] == 'Confirmada' ? 'selected' : '' ?>>Confirmada</option>
                <option value="Cancelada" <?= $cita['estado'] == 'Cancelada' ? 'selected' : '' ?>>Cancelada</option>
            </select>
        </div>

        <!-- BOTONES -->
        <button type="submit" class="btn btn-success">
            Actualizar Cita
        </button>

        <a href="index.php?accion=listarCita" class="btn btn-secondary">
            Cancelar
        </a>

    </form>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>

