<?php
$titulo = "Inicio"; // Definir el título de la página
include __DIR__ . '/../vistas/plantillas/header.php';  // Incluir el archivo header.php que contiene la parte superior del HTML
?>

<!DOCTYPE html>
<html lang="es"> <!-- Declaración del tipo de documento y el idioma -->
<head>
    <meta charset="UTF-8"> <!-- Establecer la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Hacer que el diseño sea responsivo -->
    <title><?php echo $titulo; ?></title> <!-- Mostrar el título definido anteriormente -->
    
    <!-- Vincular Bootstrap desde CDN para estilos -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Estilo personalizado para la sección "Nosotros" */
        .nosotros-section {
            padding: 60px 0; /* Espaciado superior e inferior */
            background-color: #f8f9fa; /* Color de fondo */
        }

        .nosotros-section h1, .nosotros-section h2 {
            color: #E29578; /* Color del texto para encabezados */
        }

        .nosotros-section p {
            color: #555; /* Color del texto para párrafos */
        }

        .nosotros-section h1 {
            font-size: 2.5rem; /* Tamaño de fuente para el título principal */
            margin-bottom: 20px; /* Espacio inferior del título */
        }

        .nosotros-section h2 {
            font-size: 2rem; /* Tamaño de fuente para subtítulos */
            margin-top: 40px; /* Espacio superior del subtítulo */
            margin-bottom: 20px; /* Espacio inferior del subtítulo */
        }

        .nosotros-section p {
            font-size: 1.1rem; /* Tamaño de fuente para párrafos */
            line-height: 1.7; /* Altura de línea para mejorar la legibilidad */
        }
    </style>
</head>
<body>
    <!-- Sección Nosotros -->
    <section class="nosotros-section text-center"> <!-- Sección centrada -->
        <div class="container"> <!-- Contenedor para alinear contenido -->
            <!-- Título principal de la sección -->
            <h1>Somos la marca más innovadora en toda la región</h1>
            <p class="lead"> <!-- Texto destacado -->
                En Perfect Vibes, nos destacamos por nuestra constante búsqueda de la innovación en el cuidado y diseño de uñas. 
                Nuestro compromiso con la calidad y la creatividad nos ha posicionado como líderes en el mercado regional, 
                ofreciendo productos y servicios únicos que satisfacen las necesidades de nuestros clientes.
            </p>
            <p>
                Descubre cómo transformamos el arte de la manicura con nuestras técnicas vanguardistas y productos exclusivos. 
                ¡Únete a la experiencia Perfect Vibes!
            </p>
        </div>
        <div class="container mt-5"> <!-- Contenedor para las columnas con margen superior -->
            <div class="row"> <!-- Fila para columnas -->
                <!-- Primera columna: ¿Quiénes somos? -->
                <div class="col-md-4"> 
                    <h2>¿Quiénes somos?</h2> <!-- Subtítulo -->
                    <p>
                        Somos Perfect Vibes, una empresa dedicada a revolucionar el mundo del cuidado y diseño de uñas en toda la región. 
                        Nuestro equipo está compuesto por expertos apasionados por la creatividad y la excelencia en el servicio.
                    </p>
                </div>
                <!-- Segunda columna: ¿Cómo lo hacemos? -->
                <div class="col-md-4"> 
                    <h2>¿Cómo lo hacemos?</h2> <!-- Subtítulo -->
                    <p>
                        Implementamos técnicas innovadoras y utilizamos productos de la más alta calidad para ofrecer servicios de manicura 
                        y productos únicos que cumplen con los estándares más exigentes del mercado.
                    </p>
                </div>
                <!-- Tercera columna: ¿Por qué lo hacemos? -->
                <div class="col-md-4"> 
                    <h2>¿Por qué lo hacemos?</h2> <!-- Subtítulo -->
                    <p>
                        En Perfect Vibes, creemos en la importancia de la autoexpresión y el cuidado personal. 
                        Nos inspira ayudar a nuestros clientes a sentirse seguros y hermosos, proporcionando experiencias que van más allá de las expectativas tradicionales.
                    </p>
                </div>
            </div>
            <p class="mt-5"> <!-- Párrafo con margen superior -->
                Descubre cómo transformamos el arte de la manicura con nuestras técnicas vanguardistas y productos exclusivos. 
                ¡Únete a la experiencia Perfect Vibes!
            </p>
        </div>
    </section>

    <!-- Vincular Bootstrap JS y dependencias desde CDN para funcionalidades -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> <!-- Popper.js para tooltips y popovers -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- Bootstrap JS -->
</body>

<?php
include __DIR__ . '/../vistas/plantillas/footer.php'; // Incluir el archivo footer.php que contiene el pie de página
?>
</html>
