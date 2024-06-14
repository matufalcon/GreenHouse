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
                    <h2 class="text-secondary text-center"><?= $cabaña->{'nombre'} ?></h2>
                    <p>Capacidad: <?= $cabaña->{"capacidad"} ?></p>
                    <p>🛖Cocina totalmente equipada</p>
                    <p>🛖Baño con bañera</p>
                    <p>🛖Smart tv</p>
                    <p>🛖Wifi</p>
                    <p>🛖Calefacción a gas natural</p>
                    <p>🛖Mesas y sillas de jardín</p>
                    <p>🛖Estacionamiento al lado de la cabaña</p>
                </div>
                <?php if (session()->get('logged_in')): ?>
                    <a href="<?= base_url('realizar-reserva/'. $cabaña->{'cabaña-id'} )?>" class="btn btn-primary">Reserva ahora</a>
                <?php else: ?>
                    <a href="<?= base_url('login')?>" class="btn btn-primary">Reserva ahora</a>
                <?php endif; ?>

            </div>
        </div>
        <div class="col-md-6">
            <br>
            <img src="<?= base_url('assets/img/' . $cabaña->{'imagen'}) ?>" class="img-fluid" alt="Imagen de cabaña">
        </div>

    </div>
</div>
<br><br><br>