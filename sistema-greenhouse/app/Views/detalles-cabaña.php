<style>
    p {
    font-size: 20px;
    text-align: justify;
    }
</style>

<div class="container mt-5" style="color: white ;">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
            <div class="card-body">
            <h2><?= $cabaña['nombre'] ?></h2>
                        <p>Capacidad: <?= $cabaña['capacidad-id'] ?> personas</p>
                        <p>🛖Cocina totalmente equipada</p>
                        <p>🛖Baño con bañera</p>
                        <p>🛖Smart tv</p>
                        <p>🛖Wifi</p>
                        <p>🛖Calefacción a gas natural</p>
                        <p>🛖Mesas y sillas de jardín</p>
                        <p>🛖Estacionamiento al lado de la cabaña</p>
            </div>
            <a href="#" class="btn btn-primary" style="background-color: #27D99D;">Reserva ahora</a>
</div>
        </div>
        <div class="col-md-6">
            <br>
            <img src="<?= base_url('assets/img/' . $cabaña['imagen']) ?>" class="img-fluid" alt="Imagen de cabaña">
        </div>
        
    </div>
</div>
<br><br><br>

