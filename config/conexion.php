<?php

class Conexion {

    public static function conectar(): PDO {

        $host = "localhost";
        $dbname = "proyectoDAW";
        $user = "root";
        $password = "Eminemi";
        $port = "3306";

        try {
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
