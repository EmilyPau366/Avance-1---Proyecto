<?php include_once __DIR__ . '/../layout/header.php'; ?>

<main class="container mt-4">
    <h2>Listado de Pacientes</h2>
    <p class="text-muted">Cantidad: <?= $cantidad ?></p>
    

    <div class="d-flex justify-content-start mb-3">
        <a href="index.php?accion=nuevoPaciente" class="btn btn-outline-success">
            <i class="bi bi-person-plus"></i> Registrar Paciente
        </a>
    </div>
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Cédula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th class="text-center">Acción</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($paciente as $p): ?>
                <tr>
                    <td><?= $p['idPaciente'] ?></td>
                    <td><?= $p['cedula'] ?></td>
                    <td><?= $p['nombre'] ?></td>
                    <td><?= $p['apellido'] ?></td>
                    <td><?= $p['telefono'] ?></td>
                    <td><?= $p['correo'] ?></td>
                    
                    <td class="text-center">
                        <button 
                            class="btn btn-outline-info btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#verPacienteModal"
                            data-id="<?= $p['idPaciente'] ?>"
                            data-cedula="<?= $p['cedula'] ?>"
                            data-nombre="<?= $p['nombre'] ?>"
                            data-apellido="<?= $p['apellido'] ?>"
                            data-telefono="<?= $p['telefono'] ?>"
                            data-correo="<?= $p['correo'] ?>"
                            title="Ver"
                        >
                            <i class="bi bi-eye"></i>
                        </button>

                        <a href="index.php?accion=editarPaciente&id=<?= $p['idPaciente'] ?>"
                           class="btn btn-outline-warning btn-sm"
                           title="Editar">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <a href="index.php?accion=eliminarPaciente&id=<?= $p['idPaciente'] ?>"
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
    </div>

    <div class="modal fade" id="verPacienteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title">Detalles del Paciente</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Cédula:</strong> <span id="pCedula"></span></p>
                    <p><strong>Nombres:</strong> <span id="pNombre"></span></p>
                    <p><strong>Apellidos:</strong> <span id="pApellido"></span></p>
                    <p><strong>Teléfono:</strong> <span id="pTelefono"></span></p>
                    <p><strong>Correo:</strong> <span id="pCorreo"></span></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>   
</main>

<script>
// Usamos el ID correcto del modal
const modalPaciente = document.getElementById('verPacienteModal');

modalPaciente.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;

    // Asignación de datos al modal
    document.getElementById('pCedula').textContent = button.getAttribute('data-cedula');
    document.getElementById('pNombre').textContent = button.getAttribute('data-nombre');
    document.getElementById('pApellido').textContent = button.getAttribute('data-apellido');
    document.getElementById('pTelefono').textContent = button.getAttribute('data-telefono');
    document.getElementById('pCorreo').textContent = button.getAttribute('data-correo');
});
</script>

<?php include_once __DIR__ . '/../layout/footer.php'; ?>