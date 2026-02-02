<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container mt-5 text-center">
    <h2>Inicio de sesion</h2>
    <form action="index.php?accion=procesarLogin" method="post">
        <div class="mb-3">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" required>
        </div>

        <div class="mb-3">
            <label for="clave">Clave:</label>
            <input type="text" name="clave" required>
        </div>

        <button type="submit" class="btn btn-primary">Ingresar</button>
        <br><br>
        <a class="btn btn-primary" href="index.php?accion=login">Regresar al inicio</a>
    </form>
</div>









<?php include __DIR__ . '/layout/footer.php'; ?>