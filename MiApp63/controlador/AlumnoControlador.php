<?php
require_once __DIR__ . '/../dao/AlumnoDAO.php';
require_once __DIR__ . '/../modelo/Alumno.php';

class AlumnoControlador
{

    public static function obtenerTodos()
    {
        $dao = new AlumnoDAO();
        return $dao->listarTodos();
    }
}
