<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0a3440;">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="100" height="100" class="d-inline-block align-middle" style="margin-right: 10px;"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2">
                    <a class="btn btn-primary" style="background-color: #27D99D;" href="<?= base_url('inicio') ?>">Inicio</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary" style="background-color: #27D99D;" href="#">Explorar cabañas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary" style="background-color: #27D99D;" href="<?= base_url('reservar') ?>">Reservas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn btn-primary" style="background-color: #27D99D;" href="<?= base_url('inicio') ?>#conocenos">Conócenos</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>