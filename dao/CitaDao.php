<?php
require_once __DIR__ . '/../config/Conexion.php';

class CitaDAO {

    // LISTAR
    public function listar() {
        $pdo = Conexion::conectar();

        $sql = "SELECT c.idCita, c.fecha, c.hora, c.motivo, c.estado,
                       p.nombre AS paciente,
                       m.nombre AS medico
                FROM citas c
                JOIN pacientes p ON c.idPaciente = p.idPaciente
                JOIN medicos m ON c.idMedico = m.idMedicos
                ORDER BY c.fecha DESC";

        return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // REGISTRAR
    public function registrar($data) {
        $pdo = Conexion::conectar();

        $sql = "INSERT INTO citas (idPaciente, idMedico, fecha, hora, motivo, estado)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            $data['idPaciente'],
            $data['idMedico'],
            $data['fecha'],
            $data['hora'],
            $data['motivo'],
            'Pendiente'
        ]);
    }

    // OBTENER POR ID (PARA EDITAR)
    public function obtenerPorId($id) {
        $pdo = Conexion::conectar();

        $stmt = $pdo->prepare("SELECT * FROM citas WHERE idCita = ?");
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // ACTUALIZAR (PARA EDITAR CITA)
    public function actualizar($data) {
        $pdo = Conexion::conectar();

        $sql = "UPDATE citas 
                SET idPaciente = ?, 
                    idMedico = ?, 
                    fecha = ?, 
                    hora = ?, 
                    motivo = ?, 
                    estado = ?
                WHERE idCita = ?";

        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            $data['idPaciente'],
            $data['idMedico'],
            $data['fecha'],
            $data['hora'],
            $data['motivo'],
            $data['estado'],
            $data['idCita']
        ]);
    }

    // ELIMINAR
    public function eliminar($id) {
        $pdo = Conexion::conectar();

        $stmt = $pdo->prepare("DELETE FROM citas WHERE idCita = ?");
        return $stmt->execute([$id]);
    }
}

