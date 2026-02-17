<?php
require_once __DIR__ . '/../config/conexion.php';
require_once __DIR__ . '/../modelo/UsuarioModelo.php';

class UsuarioDao {

    public function autenticar($usuario, $clave): ?Usuario {

        $pdo = Conexion::conectar();

        $sql = "SELECT * FROM usuarios 
                WHERE usuario = :usuario AND clave = :clave";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':usuario' => $usuario,
            ':clave' => $clave
        ]);

        $fila = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($fila) {
            $user = new Usuario();
            $user->id = $fila['id'];
            $user->usuario = $fila['usuario'];
            $user->clave = $fila['clave'];
            return $user;
        }

        return null;
    }
}
