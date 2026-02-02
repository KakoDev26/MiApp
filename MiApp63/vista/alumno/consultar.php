<?php
include __DIR__ . '/../layout/header.php';
?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="index.php?accion=menu" class="btn btn-secondary mb-3">← Volver al Menú</a>
    </div>

    <h3 class="text-center">Listado de Alumnos</h3>
    <div class="table-responsive">
        <table class="table table-bordered mt-3">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Cédula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnos as $a): ?>
                    <tr>
                        <td><?= ($a['Id']) ?></td>
                        <td><?= ($a['Cedula']) ?></td>
                        <td><?= ($a['Nombres']) ?></td>
                        <td><?= ($a['Apellidos']) ?></td>
                        <td><?= ($a['Correo']) ?></td>
                        <td><?= ($a['Telefono']) ?></td>
                        <td><?= ($a['FechaNacimiento']) ?></td>
                        <td>
                            <a href="index.php?accion=verAlumno=<?= $a['Id'] ?>"
                                class="btn btn-sm btn-info me-2">Ver</a>
                            <a href="index.php?accion=editarAlumno&id=<?= $a['Id'] ?>"
                                class="btn btn-sm btn-warning me-2">Editar</a>
                            <a onclick="return confirm('¿Está seguro de eliminar este usuario?')"
                                href="index.php?accion=eliminarAlumno&id=<?= $a['Id'] ?>"
                                class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>