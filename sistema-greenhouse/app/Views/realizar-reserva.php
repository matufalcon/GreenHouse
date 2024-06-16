<div class="container mt-5">
    <h2 class="text-center mb-4">Estás a un paso de reservar <?= $cabaña->{'nombre'} ?>...</h2>
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Complete los últimos datos...</h5><br>
                    <form action='<?= base_url('realizar-reserva/' . $cabaña->{'cabaña-id'}) ?>' method="post">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <h5 style="font-style: italic; font-weight: normal;">
                                    Fechas de su estadia: 
                                    <?= date('d-m', strtotime($fechaDesde)) ?> hasta <?= date('d-m', strtotime($fechaHasta)) ?>
                                </h5><br>
                                <label for="cantidadHuespedes" class="form-label">Cantidad de huéspedes</label>
                                <input type="number" class="form-control" id="cantidadHuespedes" name="cantidadHuespedes" min="1" max="12" required value="<?= set_value("cantidadHuespedes") ?>">
                            </div>

                            <div class="col-md-6 mb-2">
                                <h5 style="font-style: italic; font-weight: normal;">
                                    Monto total: <?= number_format($precioTotal, 2, ',', '.') ?>
                                </h5><br>
                                <label for="medioPago" class="form-label">Medio de pago:</label>
                                <select class="form-select" id="medioPago" name="medioPago" required>
                                    <option>Seleccione el medio de pago</option>
                                    <option value="1">Transferencia</option>
                                    <option value="2">Tarjeta de Débito</option>
                                    <option value="3">Tarjeta de Crédito</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Reservar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>