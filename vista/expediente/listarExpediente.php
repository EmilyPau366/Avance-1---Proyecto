<?php
include __DIR__ . '/../layout/header.php'; 
?>

<div class="container mt-4">
    <h2>Listado de Expedientes Médicos</h2>

    <a href="index.php?accion=nuevoExpediente" class="btn btn-success mb-3">
        Registrar Expediente
    </a>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Diagnóstico</th>
                <th>Tratamiento</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($expedientes as $e): ?>
            <tr>
                <td><?= $e['idExpediente'] ?></td>
                <td><?= $e['paciente'] ?></td>
                <td><?= $e['medico'] ?></td>
                <td><?= $e['diagnostico'] ?></td>
                <td><?= $e['tratamiento'] ?></td>
                <td class="text-center">
                    <a href="index.php?accion=eliminarExpediente&id=<?= $e['idExpediente'] ?>"
                       class="btn btn-outline-danger btn-sm"
                       onclick="return confirm('¿Eliminar expediente?')">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php 
include __DIR__ . '/../layout/footer.php'; 
?>