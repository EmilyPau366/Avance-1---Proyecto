<?php
session_start();

require_once __DIR__ . '/controlador/CitaControlador.php';
require_once __DIR__ . '/controlador/UsuarioControlador.php';
require_once __DIR__ . '/controlador/MedicoControlador.php';
require_once __DIR__ . '/controlador/PacienteControlador.php';
require_once __DIR__ . '/controlador/ExpedienteControlador.php';


$accion = $_GET['accion'] ?? 'inicio';
if(!isset($_SESSION['usuario'])
    && $accion != 'login'
    && $accion != 'procesarLogin'){
        header("Location: index.php?accion=login");
        exit();
    }
$usuarioCtrl = new UsuarioControlador();
$medicoCtrl = new MedicoControlador();
$pacienteCtrl = new PacienteControlador();
$citaCtrl = new CitaControlador();
$expedienteCtrl = new ExpedienteControlador();

switch ($accion) {
    case 'login':
        include 'vista/login.php';
        break;

    case 'procesarLogin':
        $usuarioCtrl->procesarLogin($_POST['usuario'], $_POST['clave']);
        break;
    
    case 'logout':
        session_destroy();
        session_start();
        $_SESSION['success'] ="Sesión cerrada correctamente";
        header("Location: index.php?accion=login");
        exit();

    case 'inicio':
        include_once __DIR__ . '/vista/inicio.php';
        break;
    //pacientes
    case 'listarPacientes':
        $pacienteCtrl->listar();
        break;

    case 'nuevoPaciente':
        include_once __DIR__ . '/vista/paciente/registrar.php';
        break;

    case 'guardarPaciente':
        $pacienteCtrl->registrar();
        break;
    case 'editarPaciente':
        $pacienteCtrl->editar($_GET['id']);
        break;

    case 'actualizarPaciente':
        $pacienteCtrl->actualizar();
        break;

    case 'eliminarPaciente':
        $pacienteCtrl->eliminar();
        break;

    //medicos
    case 'listarMedico':
        $medicoCtrl->listar();
        break;

    case 'nuevoMedico':
        $medicoCtrl->nuevo();
        break;
    case 'guardarMedico':
        $medicoCtrl->guardar();
        break;

    case 'editarMedico':
        $medicoCtrl->editar($_GET['id']);
        break;
    case 'actualizarMedico':
        $medicoCtrl->actualizar();
        break;

    case 'eliminarMedico':
        $medicoCtrl->eliminar($_GET['id']);
        break;

    case 'obtenerEspecialidad':
        (new MedicoControlador())->obtenerEspecialidad();
        break;

    //Expediente
    case 'listarExpedientes':
        $expedienteCtrl->listar();
        break;

    case 'nuevoExpediente':
        $expedienteCtrl->nuevo();
        break;

    case 'guardarExpediente':
        $expedienteCtrl->guardar();
        break;

    case 'editarExpediente':
        $expedienteCtrl->editar($_GET['id']);
        break;

    case 'actualizarExpediente':
        $expedienteCtrl->actualizar();
        break;

    case 'eliminarExpediente':
        $expedienteCtrl->eliminar($_GET['id']);
        break;

    

    // citas
    case 'listarCita':
        $citaCtrl->listar();
        break;

    case 'nuevaCita':
        $citaCtrl->nuevo();
        break;

    case 'guardarCita':
        $citaCtrl->guardar();
        break;

    case 'eliminarCita':
        $citaCtrl->eliminar($_GET['id']);
        break;
    case 'editarCita':
        $citaCtrl->editar($_GET['id']);
        break;

    case 'actualizarCita':
        $citaCtrl->actualizar();
        break;

    default:
        include_once __DIR__ . '/vista/inicio.php';
        break;
}
