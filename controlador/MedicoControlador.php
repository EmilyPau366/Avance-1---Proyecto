<?php
require_once __DIR__ . '/../dao/MedicoDAO.php';

class MedicoControlador {

    private $dao;

    public function __construct() {
        $this->dao = new MedicoDAO();
    }

    public function listar() {
        $medicos = $this->dao->listar();
        $cantidad = count($medicos);
        include __DIR__ . '/../vista/medico/listarMedico.php';
    }

    public function nuevo() {
        include __DIR__ . '/../vista/medico/registrarMedico.php';
    }

    public function guardar() {
        $this->dao->registrar($_POST);
        header("Location: index.php?accion=listarMedico");
    }

    public function editar($id) {
        $medico = $this->dao->obtenerPorId($id);
        include __DIR__ . '/../vista/medico/registrarMedico.php';
    }

    public function actualizar() {
        $this->dao->actualizar($_POST);
        header("Location: index.php?accion=listarMedico");
    }
    
    public function eliminar($id) {
        $this->dao->eliminar($id);
        header("Location: index.php?accion=listarMedico");
        exit;
    }

    public function obtenerEspecialidad(){
    header('Content-Type: application/json');

    $id = $_GET['id'] ?? null;

    if(!$id){
        echo json_encode(null);
        return;
    }

    // YA tienes $this->dao creado en el constructor
    $medico = $this->dao->obtenerPorId($id);

    echo json_encode($medico);
}
}