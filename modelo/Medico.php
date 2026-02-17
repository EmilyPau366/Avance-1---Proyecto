<?php
class Medico {
    private $idMedicos;
    private $cedula;
    private $nombre;
    private $apellido;
    private $correo;
    private $edad;
    private $especialidad;

    public function getIdMedicos() { return $this->idMedicos; }
    public function setIdMedicos($id) { $this->idMedicos = $id; }

    public function getCedula() { return $this->cedula; }
    public function setCedula($cedula) { $this->cedula = $cedula; }

    public function getNombre() { return $this->nombre; }
    public function setNombre($nombre) { $this->nombre = $nombre; }

    public function getApellido() { return $this->apellido; }
    public function setApellido($apellido) { $this->apellido = $apellido; }

    public function getCorreo() { return $this->correo; }
    public function setCorreo($correo) { $this->correo = $correo; }

    public function getEdad() { return $this->edad; }
    public function setEdad($edad) { $this->edad = $edad; }

    public function getEspecialidad() { return $this->especialidad; }
    public function setEspecialidad($especialidad) { $this->especialidad = $especialidad; }
}