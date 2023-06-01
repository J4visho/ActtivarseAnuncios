
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('./config/BD.php');

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Insertar los datos en la base de datos o realizar otras operaciones necesarias

    // Redirigir al usuario a una página de éxito
    header("Location: index.php");
    exit();
}
?>

<?php include('./includes/head.php'); ?>


<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="mb-3 text-center">
                <h1>Formulario de Contacto</h1>
            </div>
            <form method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje:</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('./includes/footer.php');?>
