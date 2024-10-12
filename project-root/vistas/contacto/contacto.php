<?php
$titulo = "Contacto";
include __DIR__ . '/../plantillas/header.php';  


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perfect_vides";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$mensaje = '';
$mensajeTipo = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensajeTexto = htmlspecialchars($_POST['mensaje']);
    

    if (!empty($nombre) && !empty($email) && !empty($mensajeTexto)) {

        $stmt = $conn->prepare("INSERT INTO mensajes (nombre, email, mensaje) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre, $email, $mensajeTexto);

        if ($stmt->execute()) {

            $mensaje = "Mensaje enviado con éxito.";
            $mensajeTipo = "success";
        } else {
  
            $mensaje = "Hubo un error al enviar el mensaje: " . $stmt->error;
            $mensajeTipo = "danger";
        }

        $stmt->close();
    } else {

        $mensaje = "Todos los campos son obligatorios.";
        $mensajeTipo = "warning";
    }
}

// Cerrar la conexión
$conn->close();
?>
 
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <h1 class="mb-4 text-center">Contacto</h1>
                <?php if (!empty($mensaje)): ?>
                    <div class="alert alert-<?php echo $mensajeTipo; ?>" role="alert">
                        <?php echo $mensaje; ?>
                    </div>
                <?php endif; ?>
                <form action="contacto.php" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Sugerencias</label>
                        <textarea id="mensaje" name="mensaje" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
<?php
include __DIR__ . '/../plantillas/footer.php';
?>
