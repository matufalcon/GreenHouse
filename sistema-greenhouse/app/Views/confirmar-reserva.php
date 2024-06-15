<div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Tipo de Habitación</th>
                    <th>Descripción</th>
                    <th>Cantidad de huéspedes</th>
                    <th>Precio por Noche</th>
                    <th>Día de llegada</th>
                    <th>Día de salida</th>
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
                    <td><?= date('d-m', strtotime($fechaDesde)) ?></td>
                    <td><?= date('d-m', strtotime($fechaHasta)) ?></td>
                    <td><?= $diferenciaDias ?></td>
                    <td><?= number_format($precioTotal, 2, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>