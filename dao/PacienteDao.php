<?php
require_once __DIR__ . '/../config/Conexion.php';
require_once __DIR__ . '/../modelo/Paciente.php';

class PacienteDao{

     public function listar() {
        $pdo = Conexion::conectar();
        $sql = "SELECT * FROM pacientes";
        return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $pdo = Conexion::conectar();
        $sql = "SELECT * FROM pacientes WHERE idPaciente = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function registrar($paciente) {
        $pdo = Conexion::conectar();
        $sqlInsert = "INSERT INTO pacientes (cedula, nombre, apellido, correo, telefono) 
                      VALUES (:cedula, :nombre, :apellido, :correo, :telefono)";
        $stmt = $pdo->prepare($sqlInsert);
        
        return $stmt->execute([
            ':cedula'   => $paciente->cedula,
            ':nombre'   => $paciente->nombre,
            ':apellido' => $paciente->apellido,
            ':correo'   => $paciente->correo,
            ':telefono' => $paciente->telefono
        ]);
    }

    public function actualizar($paciente) {
        $pdo = Conexion::conectar();
        $sql = "UPDATE pacientes SET 
                    cedula = :cedula,
                    nombre = :nombre,
                    apellido = :apellido,
                    correo = :correo,
                    telefono = :telefono
                WHERE idPaciente = :idPaciente";
        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            ':cedula'   => $paciente->cedula,
            ':nombre'   => $paciente->nombre,
            ':apellido' => $paciente->apellido,
            ':correo'   => $paciente->correo,
            ':telefono' => $paciente->telefono,
            ':idPaciente'       => $paciente->id
        ]);
    }

    public function eliminar($id) {
        $pdo = Conexion::conectar();
        $sql = "DELETE FROM pacientes WHERE idPaciente = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}