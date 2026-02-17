<?php
require_once __DIR__ . '/../config/Conexion.php';

class ExpedienteDao{
    public function listar() {
    $pdo = Conexion::conectar();

    $sql = "
        SELECT 
            e.idExpediente,
            CONCAT(p.nombre, ' ', p.apellido) AS paciente,
            CONCAT(m.nombre, ' ', m.apellido) AS medico,
            e.diagnostico,
            e.tratamiento,
            e.fecha
        FROM expedientes e
        INNER JOIN pacientes p ON e.idPaciente = p.idPaciente
        INNER JOIN medicos m ON e.idMedicos = m.idMedicos
        ORDER BY e.fecha DESC
    ";

    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
    $pdo = Conexion::conectar();

    $sql = "
        SELECT e.*
        FROM expedientes e
        WHERE e.idExpediente = ?
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function registrar($data) {
        $pdo = Conexion::conectar();
        $sql = "INSERT INTO expedientes (idPaciente, idMedicos, fecha, diagnostico, tratamiento)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            $data['idPaciente'],
            $data['idMedicos'],
            $data['fecha'],
            $data['diagnostico'],
            $data['tratamiento']
        ]);
    }

    public function actualizar($data) {
        $pdo = Conexion::conectar();
        $sql = "UPDATE expedientes 
                SET idPaciente=?, idMedicos=?, fecha=?, diagnostico=?, tratamiento=?
                WHERE idExpediente=?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            $data['idPaciente'],
            $data['idMedico'],
            $data['fecha'],
            $data['diagnostico'],
            $data['tratamiento'],
            $data['idExpediente']
        ]);
    }

    public function eliminar($id) {
        $pdo = Conexion::conectar();
        $sql = "DELETE FROM expedientes WHERE idExpediente = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?>