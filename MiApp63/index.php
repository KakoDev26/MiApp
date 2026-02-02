<?php
require_once 'controlador/UsuarioControlador.php';
require_once 'controlador/AlumnoControlador.php';
$accion = $_GET['accion'] ?? 'inicio';
$usuarioCtrl = new UsuarioControlador();
switch ($accion) {
    case 'login':
        include 'vista/login.php';
        break;


    case 'procesarLogin':
        $usuarioCtrl->procesarLogin($_POST['usuario'], $_POST['clave']);
        break;


    case 'menu':
        include 'vista/menu.php';
        break;

    case 'consultar':
        $alumnos = AlumnoControlador::obtenerTodos();
        include 'vista/alumno//consultar.php';
        break;

    default:
        include 'vista/inicio.php';
        break;
}
