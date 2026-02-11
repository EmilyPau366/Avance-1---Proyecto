<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-4">
    <h2>Listado de Citas Médicas</h2>

    <a href="index.php?accion=nuevaCita" class="btn btn-success mb-3">
        Registrar Cita
    </a>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Motivo</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($citas as $c): ?>
            <tr>
                <td><?= $c['idCita'] ?></td>
                <td><?= $c['paciente'] ?></td>
                <td><?= $c['medico'] ?></td>
                <td><?= $c['fecha'] ?></td>
                <td><?= $c['hora'] ?></td>
                <td><?= $c['motivo'] ?></td>
                <td><?= $c['estado'] ?></td>
                <td class="text-center">
                    <a href="index.php?accion=eliminarCita&id=<?= $c['idCita'] ?>"
                       class="btn btn-outline-danger btn-sm"
                       onclick="return confirm('¿Eliminar cita?')">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
