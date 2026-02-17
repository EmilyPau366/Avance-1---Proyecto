<?php
require_once __DIR__ . '/../config/Conexion.php';

class MedicoDAO {

    public function listar() {
        $pdo = Conexion::conectar();
        $sql = "SELECT * FROM medicos";
        return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $pdo = Conexion::conectar();
        $sql = "SELECT * FROM medicos WHERE idMedicos = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

    public function registrar($data) {
        $pdo = Conexion::conectar();
        $sql = "INSERT INTO medicos (cedula, nombre, apellido, correo, edad, especialidad)
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            $data['cedula'],
            $data['nombre'],
            $data['apellido'],
            $data['correo'],
            $data['edad'],
            $data['especialidad']
        ]);
    }

    public function actualizar($data) {
        $pdo = Conexion::conectar();
        $sql = "UPDATE medicos 
                SET cedula=?, nombre=?, apellido=?, correo=?, edad=?, especialidad=?
                WHERE idMedicos=?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            $data['cedula'],
            $data['nombre'],
            $data['apellido'],
            $data['correo'],
            $data['edad'],
            $data['especialidad'],
            $data['idMedicos']
        ]);
    }

    public function eliminar($id) {
        $pdo = Conexion::conectar();
        $sql = "DELETE FROM medicos WHERE idMedicos = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    
}

