<div class="container mt-5">
    <h2 class="text-center mb-4" style="color: white;">Consultar cabañas disponibles</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="fechaEntrada" class="form-label" style="color: white;">Fecha de entrada:</label>
                    <input type="date" class="form-control" id="fechaEntrada" required>
                </div>
                <div class="mb-3">
                    <label for="fechaSalida" class="form-label" style="color: white;">Fecha de salida:</label>
                    <input type="date" class="form-control" id="fechaSalida" required>
                </div>
                <button type="submit" class="btn btn-primary">Ver cabañas disponibles</button>
            </form>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center mb-4">Cabañas disponibles</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="ruta_a_imagen_cabana.jpg" class="card-img-top" alt="Cabaña">
                <div class="card-body">
                    <h5 class="card-title">Nombre de la cabaña</h5>
                    <p class="card-text">Características de la cabaña.</p>
                    <a href="#" class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>
        <!-- Repetir este bloque para cada cabaña disponible -->
    </div>
</div>

