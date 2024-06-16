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
        <form action='<?= base_url('/inicio') ?>' class="me-2">
            <button type="submit" class="btn btn-danger">Cancelar</button>
        </form>
        <form action='<?= base_url() ?>' method="post">
            <button type="submit" class="btn btn-primary">Confirmar reserva</button>
        </form>
    </div>

    </div>
</div>