<?php
require_once __DIR__ . '/../bd/conexion.php';
require_once __DIR__ . '/../modelo/Alumno.php';


class AlumnoDao
{

    public function listarTodos()
    {

        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = "SELECT Id, Cedula, Nombres, Apellidos, Correo, Telefono, FechaNacimiento
                FROM alumnos
                ORDER BY id";

        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
