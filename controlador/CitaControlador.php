<?php
require_once __DIR__ . '/../dao/CitaDAO.php';
require_once __DIR__ . '/../dao/PacienteDAO.php';
require_once __DIR__ . '/../dao/MedicoDAO.php';


class CitaControlador {

    private $dao;

    public function __construct() {
        $this->dao = new CitaDAO();
    }

    // LISTAR CITAS
    public function listar() {
        $citas = $this->dao->listar();
        include __DIR__ . '/../vista/cita/listarCita.php';
    }

    // FORMULARIO  CITA
    public function nuevo() {
        $pacientes = (new PacienteDAO())->listar();
        $medicos = (new MedicoDAO())->listar();
        include __DIR__ . '/../vista/cita/registrarCita.php';
    }

    // GUARDAR CITA
    public function guardar() {

        $data = [
            'idPaciente' => $_POST['idPaciente'],
            'idMedico'   => $_POST['idMedico'],
            'fecha'      => $_POST['fecha'],
            'hora'       => $_POST['hora'],
            'motivo'     => $_POST['motivo']
        ];

        $this->dao->registrar($data);

        header("Location: index.php?accion=listarCita");
        exit();
    }

    public function editar($id) {
        $cita = $this->dao->obtenerPorId($id);
        $pacientes = (new PacienteDAO())->listar();
        $medicos   = (new MedicoDAO())->listar();

        include __DIR__ . '/../vista/cita/editarCita.php';
    }

    public function obtenerPorId($id) {
        $pdo = Conexion::conectar();
        $stmt = $pdo->prepare("SELECT * FROM citas WHERE idCita = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar() {

        $data = [
            'idCita'     => $_POST['idCita'],
            'idPaciente' => $_POST['idPaciente'],
            'idMedico'   => $_POST['idMedico'],
            'fecha'      => $_POST['fecha'],
            'hora'       => $_POST['hora'],
            'motivo' => $_POST['motivo'] ?? '',
            'estado'     => $_POST['estado'] ?? 'Pendiente'
        ];

        $this->dao->actualizar($data);

        header("Location: index.php?accion=listarCita");
        exit();
    }

    // ELIMINAR
    public function eliminar($id) {
        $this->dao->eliminar($id);
        header("Location: index.php?accion=listarCita");
    }
}
