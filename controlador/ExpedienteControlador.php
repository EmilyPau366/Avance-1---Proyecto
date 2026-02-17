<?php
require_once __DIR__ . '/../dao/ExpedienteDao.php';
require_once __DIR__ . '/../dao/PacienteDao.php';
require_once __DIR__ . '/../dao/MedicoDao.php';


class ExpedienteControlador
{
    private $expedienteDao;

    public function __construct()
    {
        $this->expedienteDao = new ExpedienteDao();
    }

    public function listar()
    {
        $expedientes = $this->expedienteDao->listar();
        include __DIR__ . '/../vista/expediente/listarExpediente.php';
    }

    public function nuevo()
    {
        $pacienteDao = new PacienteDao();
        $medicoDao   = new MedicoDao();

        $pacientes = $pacienteDao->listar();
        $medicos   = $medicoDao->listar();

        include __DIR__ . '/../vista/expediente/registrarExpediente.php';
    }

    public function guardar()
    {
        if ($_POST) {
            $this->expedienteDao->registrar($_POST);
            header("Location: index.php?accion=listarExpedientes");
        }
    }

    public function editar($id)
    {
        $expediente = $this->expedienteDao->obtenerPorId($id);
        include __DIR__ . '/../vista/expediente/editarExpediente.php';
    }

    public function actualizar()
    {
        if ($_POST) {
            $this->expedienteDao->actualizar($_POST);
            header("Location: index.php?accion=listarExpedientes");
        }
    }

    public function eliminar($id)
    {
        $this->expedienteDao->eliminar($id);
        header("Location: index.php?accion=listarExpedientes");
    }
}
?>