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
        include __DIR__ . '/../vista/cita/registrarPaciente.php';
    }

    // GUARDAR CITA
    public function guardar() {
        $this->dao->registrar($_POST);
        header("Location: index.php?accion=listarCita");
    }

    // ELIMINAR
    public function eliminar($id) {
        $this->dao->eliminar($id);
        header("Location: index.php?accion=listarCita");
    }
}
