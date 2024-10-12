<?php
$titulo = "Inicio";
include __DIR__ . '/../vistas/plantillas/header.php';  // Incluye header.php
?>
<div class="container">
    <!-- Carrusel de Promociones -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagenes/promo1.jpeg" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="imagenes/promo2.jpeg" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="imagenes/promo3.jpeg" class="d-block w-100" alt="Imagen 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Texto de Bienvenida -->
    <div class="bienvenidos text-center mt-4">
        <h1 class="bien">¡Bienvenidos a Perfect Vibes!</h1>
        <p class="bi">Reserva en el mejor spa de uñas de Colombia, contamos con las mejores técnicas en uñas,
            manicuristas altamente capacitadas, protocolos rigurosos de esterilización y productos
            libres de químicos, amigables con tu salud y con el medio ambiente.
        </p>
        <a href="../public/servicios.php" class="btn btn-primary">Empezar</a>
    </div>

    <!-- Carrusel de Productos -->
    <div class="productos mt-5">
        <h2 class="text-center">Nuestros Productos</h2>
        <div id="carouselProducts" class="carousel slide" data-bs-interval="false"> <!-- Avance solo manual -->
            <div class="carousel-inner">
                <!-- Primera diapositiva -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <?php 
                        $productos = [
                            ["src" => "imagenes/Locion_Corporal.webp", "title" => "Bio Oil", "text" => "Loción Corporal Bio Oil 250ml"],
                            ["src" => "imagenes/Arden_For_Men_des.webp", "title" => "Arden for Men", "text" => "Desodorante Arden For Men Clinical Power Protech Crema 70gr"],
                            ["src" => "imagenes/BiofolicShampoo.webp", "title" => "OGX", "text" => "Biofolic Amarillo Shampoo Control Caspa X 240 Ml"]
                        ];
                        foreach ($productos as $producto): ?>
                        <div class="col-md-3">
                            <div class="card mb-4 h-100 shadow-sm">
                                <img src="<?php echo $producto['src']; ?>" class="card-img-top img-fluid" alt="<?php echo $producto['title']; ?>">
                                <div class="card-body text-center d-flex flex-column">
                                    <h5 class="card-title"><?php echo $producto['title']; ?></h5>
                                    <p class="card-text"><?php echo $producto['text']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Segunda diapositiva -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <?php 
                        $productos2 = [
                            ["src" => "imagenes/producto4.webp", "title" => "Nude", "text" => "Protector Solar Nude Con Color Spf50 50ml"],
                            ["src" => "imagenes/producto5.webp", "title" => "Blisstouch", "text" => "Bt Labial Matte Rojo X 3.8 G"],
                            ["src" => "imagenes/producto6.webp", "title" => "Wella Professionals", "text" => "Mascarilla Wella Profesionals Color Motion Wella Boutique 500 ml"]
                        ];
                        foreach ($productos2 as $producto): ?>
                        <div class="col-md-3">
                            <div class="card mb-4 h-100 shadow-sm">
                                <img src="<?php echo $producto['src']; ?>" class="card-img-top img-fluid" alt="<?php echo $producto['title']; ?>">
                                <div class="card-body text-center d-flex flex-column">
                                    <h5 class="card-title"><?php echo $producto['title']; ?></h5>
                                    <p class="card-text"><?php echo $producto['text']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Controles del carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProducts" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselProducts" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <!-- Botón para conocer más productos -->
        <div class="text-center mt-4">
            <a href="productos.php" class="btn btn-primary">Conocer Más</a>
        </div>
    </div>
</div>

<?php
include __DIR__ . '/../vistas/plantillas/footer.php';  // Incluye footer.php
?>
