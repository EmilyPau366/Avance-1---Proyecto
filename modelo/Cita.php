<?php

class Cita {

    private $idCita;
    private $idPaciente;
    private $idMedico;
    private $fecha;
    private $hora;
    private $motivo;
    private $estado;

    // ID CITA
    public function setIdPaciente($idPaciente) {
        $this->idPaciente = $idPaciente;
    }

    public function setIdMedico($idMedico) {
        $this->idMedico = $idMedico;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function setMotivo($motivo) {
        $this->motivo = $motivo;
    }

    public function getIdPaciente() {
        return $this->idPaciente;
    }

    public function getIdMedico() {
        return $this->idMedico;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getHora() {
        return $this->hora;
    }

    public function getMotivo() {
        return $this->motivo;
    }

    // ESTADO
    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
}
