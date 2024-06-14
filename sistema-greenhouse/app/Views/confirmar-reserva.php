<div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Tipo de Habitación</th>
                        <th>Descripción</th>
                        <th>Cantidad de huespedes</th>
                        <th>Precio por Noche</th>
                        <th>Cantidad de dias</th>
                        <th>Precio total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $cabaña->{'nombre'} ?></td>
                        <td><?= $cabaña->{'descripcion'} ?></td>
                        
                        <td>
                        <?php for ($i = 0; $i < $cantidadHuespedes; $i++): ?>
                            <i class="bi bi-person-fill"></i>
                        <?php endfor; ?>
                        </td>
                        <td><?= $cabaña->{'precio'} ?></td>
                        <td>DIAS</td>
                        <td><?= $cabaña->{'precio'} * $cabaña->{'precio'} ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>