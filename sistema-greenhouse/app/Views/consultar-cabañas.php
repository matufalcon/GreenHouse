<section style="background-color: #27D99D;">
<div class="container mt-5">
    <h2 class="text-center mb-4" style="color: white;">Consultar cabañas disponibles</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <form action='<?= base_url() ?> consultar-cabanas' method="post">
                <div class="mb-3">
                    <label for="fechaEntrada" class="form-label" style="color: white;">Fecha de entrada:</label>
                    <input type="date" class="form-control" id="fechaEntrada" name="fechaEntrada" min="<?= date('Y-m-d') ?>" required>
                </div>
                <div class="mb-3">
                    <label for="fechaSalida" class="form-label" style="color: white;">Fecha de salida:</label>
                    <input type="date" class="form-control" id="fechaSalida" name="fechaSalida" min="<?= date('Y-m-d') ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Ver cabañas disponibles</button>
            </form>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <?php if (isset($cabañas)): ?>
            <h2 class="text-center mb-4" style="color:white ;">Cabañas disponibles</h2>
            <?php foreach ($cabañas as $cabaña): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="assets/img/<?= $cabaña["imagen"] ?>" class="card-img-top" alt="Cabaña">
                        <div class="card-body">

                            <h5 class="card-title text-center"><?= $cabaña["nombre"] ?></h5>

                            <p class="card-text text-justify">Características de la cabaña: <?= $cabaña["descripcion"] ?></p>

                            <a href="<?= base_url('detalles-cabana/' . $cabaña['cabaña-id']) ?>" class="btn btn-primary text-center">Ver detalles</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
</section>