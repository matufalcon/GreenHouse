<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2><?= $cabaña['nombre'] ?></h2>
            <p>Capacidad: <?= $cabaña['capacidad-id'] ?> personas</p>
            
            <!-- Agrega el resto de las características aquí -->
        </div>
        <div class="col-md-6">
            <img src="<?= base_url('assets/img/' . $cabaña['imagen']) ?>" class="img-fluid" alt="Imagen de cabaña">
        </div>
        
    </div>
</div>
