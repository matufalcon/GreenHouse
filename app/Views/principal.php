<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREEN HOUSE | Reserva de Cabañas</title>
    
    <link href="<?php echo base_url('assets/css/estilos.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.png')?> ">
</head>
<body style="background-color: #0a3440;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0a3440;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-middle" style="margin-right: 10px;"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2">
                    <a class="btn btn-primary" style="background-color: #27D99D;" href="#">Inicio</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary" style="background-color: #27D99D;" href="#">Explorar cabañas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary" style="background-color: #27D99D;" href="#">Reservas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary" style="background-color: #27D99D;" href="#conocenos">Conócenos</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- imagen presentacion -->
    <!-- assets/img/presentacion.png -->
    <div class="container-fluid p-0">
    <div class="row">
        <div class="col-12 p-0">
                <img src="assets/img/presentacion.png" alt="Cabaña" class="img-fluid">
                <div class="position-absolute top-50 start-0 translate-middle-y px-3">
                    <p class="lead text-start">Tomate un descanso y disfruta de una estadia en una cabaña.</p>
                    <a href="#" class="btn btn-primary" style="background-color: #27D99D;">Reserva ahora</a>
                </div>
            </div>
        </div>
    </div>

    <!-- conocenos -->
    <div class="container-fluid" style="background-color: #0a3440; padding: 50px;" id="conocenos">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/cabaña-conocenos.jpeg" alt="Imagen" class="img-fluid">
            </div>
            <div class="col-md-6 text-light">
                <p>
                    Green House es una empresa dedicada a la preservación del medio ambiente y la promoción de la vida sostenible. Fundada en 2005, nos hemos comprometido a crear un futuro más verde y saludable para las generaciones venideras.
                </p>
                <p>
                    Nuestros productos orgánicos y métodos de cultivo ecológicos han sido reconocidos internacionalmente por su calidad y sostenibilidad. Trabajamos en estrecha colaboración con las comunidades locales para promover la agricultura sostenible y reducir nuestra huella de carbono.
                </p>
            </div>
        </div>
    </div>

  
    <!-- reservar ahora -->
    <div class="container" style="background-color: #0a3440; padding: 50px;">
    <h2 class="text-center text-light mb-4">Cabañas más elegidas</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="assets/img/cabaña-conocenos.jpeg" class="card-img-top" alt="Cabaña 1">
                <div class="card-body">
                    <h5 class="card-title text-center">Cabaña 1</h5>
                    <p class="card-text">Descripción de la cabaña 1.</p>
                    <a href="#" class="btn btn-primary d-block mx-auto">Reservar</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="assets/img/cabaña-conocenos.jpeg" class="card-img-top" alt="Cabaña 2">
                <div class="card-body">
                    <h5 class="card-title text-center">Cabaña 2</h5>
                    <p class="card-text">Descripción de la cabaña 2.</p>
                    <a href="#" class="btn btn-primary d-block mx-auto">Reservar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<footer class="bg-dark text-light py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <img src="assets/img/logo.png" alt="Logo Green House" class="img-fluid">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Inicio</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Nosotros</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Explorar</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Cabañas</a></li>
                            <li><a href="#">Reservas</a></li>
                            <li><a href="#">Testimonios</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Legal</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Términos y condiciones</a></li>
                            <li><a href="#">Política de privacidad</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Síguenos</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

    
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
