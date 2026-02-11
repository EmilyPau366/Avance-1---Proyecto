<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-4">
    <h2>Listado de Médicos</h2>
    <p class="text-muted">Cantidad: <?= $cantidad ?></p>

    <a href="index.php?accion=nuevoMedico" class="btn btn-outline-success mb-3">
        Registrar Médico
    </a>

    <table class="table table-bordered table-hover table-sm">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Cédula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Edad</th>
            <th>Especialidad</th>
            <th class="text-center">Acción</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($medicos as $m): ?>
        <tr>
            <td><?= $m['idMedicos'] ?></td>
            <td><?= $m['cedula'] ?></td>
            <td><?= $m['nombre'] ?></td>
            <td><?= $m['apellido'] ?></td>
            <td><?= $m['correo'] ?></td>
            <td><?= $m['edad'] ?></td>
            <td><?= $m['especialidad'] ?></td>

            <td class="text-center">
                <!-- VER -->
                <button 
                    class="btn btn-outline-info btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#verMedicoModal"
                    data-id="<?= $m['idMedicos'] ?>"
                    data-cedula="<?= $m['cedula'] ?>"
                    data-nombre="<?= $m['nombre'] ?>"
                    data-apellido="<?= $m['apellido'] ?>"
                    data-correo="<?= $m['correo'] ?>"
                    data-edad="<?= $m['edad'] ?>"
                    data-especialidad="<?= $m['especialidad'] ?>"
                    title="Ver"
                >
                    <i class="bi bi-eye"></i>
                </button>

                <!-- EDITAR -->
                <a href="index.php?accion=editarMedico&id=<?= $m['idMedicos'] ?>"
                   class="btn btn-outline-warning btn-sm"
                   title="Editar">
                    <i class="bi bi-pencil-square"></i>
                </a>

                <!-- ELIMINAR -->
                <a href="index.php?accion=eliminarMedico&id=<?= $m['idMedicos'] ?>"
                   class="btn btn-outline-danger btn-sm"
                   onclick="return confirm('¿Desea eliminar este registro?')"
                   title="Eliminar">
                    <i class="bi bi-trash"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<div class="modal fade" id="verMedicoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Detalles del Médico</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p><strong>Cédula:</strong> <span id="mCedula"></span></p>
                <p><strong>Nombres:</strong> <span id="mNombre"></span></p>
                <p><strong>Apellidos:</strong> <span id="mApellido"></span></p>
                <p><strong>Correo:</strong> <span id="mCorreo"></span></p>
                <p><strong>Edad:</strong> <span id="mEdad"></span></p>
                <p><strong>Especialidad:</strong> <span id="mEspecialidad"></span></p>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">
                    Cerrar
                </button>
            </div>

        </div>
    </div>
</div>
</div>

<script>
const verMedicoModal = document.getElementById('verMedicoModal');

verMedicoModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;

    document.getElementById('mCedula').textContent = button.getAttribute('data-cedula');
    document.getElementById('mNombre').textContent = button.getAttribute('data-nombre');
    document.getElementById('mApellido').textContent = button.getAttribute('data-apellido');
    document.getElementById('mCorreo').textContent = button.getAttribute('data-correo');
    document.getElementById('mEdad').textContent = button.getAttribute('data-edad');
    document.getElementById('mEspecialidad').textContent = button.getAttribute('data-especialidad');
});
</script>

<?php include __DIR__ . '/../layout/footer.php'; ?>