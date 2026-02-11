<?php
class Expediente
{
    private $idExpediente;
    private $idPaciente;
    private $idMedico;
    private $fecha;
    private $diagnostico;
    private $tratamiento;

    public function getIdExpediente()
    {
        return $this->idExpediente;
    }
    public function setIdExpediente($id)
    {
        $this->idExpediente = $id;
    }

    public function getIdPaciente()
    {
        return $this->idPaciente;
    }
    public function setIdPaciente($idPaciente)
    {
        $this->idPaciente = $idPaciente;
    }

    public function getIdMedico()
    {
        return $this->idMedico;
    }
    public function setIdMedico($idMedico)
    {
        $this->idMedico = $idMedico;
    }

    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getDiagnostico()
    {
        return $this->diagnostico;
    }
    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;
    }

    public function getTratamiento()
    {
        return $this->tratamiento;
    }
    public function setTratamiento($tratamiento)
    {
        $this->tratamiento = $tratamiento;
    }
}
?>