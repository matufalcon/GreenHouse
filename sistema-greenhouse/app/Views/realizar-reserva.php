<div class="container mt-5">
    <h2 class="text-center mb-4">Estás a un paso de reservar <?= $cabaña->{'nombre'} ?>...</h2>
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Complete los últimos datos...</h5><br>
                    <form action='<?= base_url('realizar-reserva/'. $cabaña->{'cabaña-id'} )?>' method="post">
                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <label for="cantidadHuespedes" class="form-label">Cantidad de huéspedes</label>
                                <input type="number" class="form-control" id="cantidadHuespedes" name="cantidadHuespedes" min="1" max="12" required>                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-label" style="color: white;">.</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paquete" id="paqueteBasico" value="basico" required>
                                    <label class="form-check-label" for="paqueteBasico">Básico</label>
                                </div>
                                <small class="form-text text-muted">Incluye Wi-Fi y desayuno.</small>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="paqueteIntermedio" class="form-label">Seleccione paquete</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paquete" id="paqueteIntermedio" value="intermedio">
                                    <label class="form-check-label" for="paqueteIntermedio">Intermedio</label>
                                </div>
                                <small class="form-text text-muted">Incluye Wi-Fi, desayuno y cena.</small>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-label" style="color: white;">.</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paquete" id="paqueteCompleto" value="completo">
                                    <label class="form-check-label" for="paqueteCompleto">Completo</label>
                                </div>
                                <small class="form-text text-muted">Incluye todas las comidas y actividades.</small>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="medioPago" class="form-label">Medio de pago</label>
                                <select class="form-select" id="medioPago" name="medioPago" required>
                                    <option value="transferencia">Transferencia</option>
                                    <option value="debito">Tarjeta de Débito</option>
                                    <option value="credito">Tarjeta de Crédito</option>
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

<!-- <div class="container mt-5">
    <h2 class="text-center mb-4">Estás a un paso de reservar <?= $cabaña->{'nombre'} ?>...</h2>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Tipo de Habitación</th>
                    <th>Descripción</th>
                    <th>Número de Personas</th>
                    <th>Precio por Noche</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $cabaña->{'nombre'} ?></td>
                    <td><?= $cabaña->{'descripcion'} ?></td>
                    

                </tr>
            </tbody>
        </table>
    </div>
</div> -->