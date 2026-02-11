<?php
require_once __DIR__ . '/../dao/PacienteDao.php';
class PacienteControlador{
    private $dao;

    public function __construct() {
        $this->dao = new PacienteDao();
    }

    public function listar() {
        $paciente = $this->dao->listar();
        $cantidad = count($paciente);
        include_once __DIR__ . '/../vista/paciente/consultar.php';
    }

    public function editar($id) {
    $paciente = $this->dao->obtenerPorId($id); 
    include_once __DIR__ . '/../vista/paciente/registrar.php';
}

    public function nuevo() {
        include __DIR__ . '/../vista/paciente/registrar.php';
    }
    
    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $p = new Paciente();
            $p->cedula = $_POST['cedula'];
            $p->nombre = $_POST['nombre'];
            $p->apellido = $_POST['apellido'];
            $p->telefono = $_POST['telefono'];
            $p->correo = $_POST['correo'];
 
            if ($this->dao->registrar($p)) {
                
                header("Location: index.php?accion=listarPacientes");
            } else {
                echo "Error al registrar el paciente.";
            }
        }
    }

    public function actualizar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $p = new Paciente();
            $p->id = $_POST['idPaciente']; // Importante: el ID que viene del hidden
            $p->cedula = $_POST['cedula'];
            $p->nombre = $_POST['nombre'];
            $p->apellido = $_POST['apellido'];
            $p->telefono = $_POST['telefono'];
            $p->correo = $_POST['correo'];

            if ($this->dao->actualizar($p)) {
                header("Location: index.php?accion=listarPacientes");
            }
        }
    }

    public function eliminar() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            if ($this->dao->eliminar($id)) {
                header("Location: index.php?accion=listarPacientes");
            } else {
                echo "Error al eliminar.";
            }
        }
    }
}
?>