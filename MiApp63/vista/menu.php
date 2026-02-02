<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between aling-items-center mb-4">
        <h2 class="m-0">Menu Principal</h2>
        <a class="btn btn-outline-primary" href="index.php?accion=logout">Cerrar sesion</a>

    </div>

    <p>Bienvenido </p>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-4 mb-3">
            <div class="card text-center h-100">
                <div class="card-body">
                    <h5 class="card-title">Alumnos</h5>
                    <p class="card-text">Gestión de estudiantes.</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="../index.php?accion=registrar" class="btn btn-outline-primary btn-sm">Registrar</a>
                        <a href="../index.php?accion=consultar" class="btn btn-outline-secondary btn-sm">Consultar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/layout/footer.php'; ?>