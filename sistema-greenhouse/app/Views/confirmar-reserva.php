<div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nombre de la cabaña</th>
                    <th>Descripción</th>
                    <th>Cantidad de huéspedes</th>
                    <th>Precio noche</th>
                    <th>Cantidad de días</th>
                    <th>Precio total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $cabaña->nombre ?></td>
                    <td><?= $cabaña->descripcion ?></td>
                    <td>
                        <?php for ($i = 0; $i < $cantidadHuespedes; $i++): ?>
                            <i class="bi bi-person-fill"></i>
                        <?php endfor; ?>
                    </td>
                    <td><?= number_format($cabaña->precio, 2, ',', '.') ?></td>
                    <td><?= $diferenciaDias ?></td>
                    <td><?= number_format($precioTotal, 2, ',', '.') ?> <br><br>

                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <a type="submit" class="btn btn-danger me-4" href="<?= base_url()?>">Cancelar</a>
            <form action='<?= base_url() ?>registrarReserva' method="post">
                <input type="hidden" name="fecha-entrada" value="<?= $fechaDesde ?>">
                <input type="hidden" name="fecha-salida" value="<?= $fechaHasta ?>">
                <input type="hidden" name="cantHuesped" value="<?= $cantidadHuespedes ?>">
                <input type="hidden" name="monto" value="<?= $precioTotal ?>">
                <input type="hidden" name="usuario-id" value="<?= session()->get('id') ?>">
                <input type="hidden" name="cabaña-id" value="<?= $cabaña->{'cabaña-id'} ?>">
                <input type="hidden" name="mediosPago-id" value="<?= $medioPago ?>">
                <button type="submit" class="btn btn-primary">Confirmar reserva</button>
            </form>
        </div>

    </div>
</div>