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
    public function getIdCita() {
        return $this->idCita;
    }

    public function setIdCita($idCita) {
        $this->idCita = $idCita;
    }

    // PACIENTE
    public function getIdPaciente() {
        return $this->idPaciente;
    }

    public function setIdPaciente($idPaciente) {
        $this->idPaciente = $idPaciente;
    }

    // MEDICO
    public function getIdMedico() {
        return $this->idMedico;
    }

    public function setIdMedico($idMedico) {
        $this->idMedico = $idMedico;
    }

    // FECHA
    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    // HORA
    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    // MOTIVO
    public function getMotivo() {
        return $this->motivo;
    }

    public function setMotivo($motivo) {
        $this->motivo = $motivo;
    }

    // ESTADO
    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
}
