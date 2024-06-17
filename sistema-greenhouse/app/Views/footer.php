<div class="content"></div>
<!-- footer -->
<footer class="bg-dark text-light py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo Green House" class="img-fluid"
                    style="max-width: 200px; max-height: 200px;">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Inicio</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Nosotros</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Explorar</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Cabañas</a></li>
                            <li><a href="#">Reservas</a></li>
                            <li><a href="#">Testimonios</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Legal</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Términos y condiciones</a></li>
                            <li><a href="#">Política de privacidad</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Síguenos</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- Modales de éxito y error -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">¡Éxito!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="errorModalLabel">¡Error!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

<!-- Script para mostrar el modal -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        if ('<?php echo isset($_SESSION['success']); ?>' && '<?php echo session()->getFlashdata('success'); ?>' !== '') {
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
            <?php unset($_SESSION['success']); ?>
        }
        if ('<?php echo isset($_SESSION['error']); ?>' && '<?php echo session()->getFlashdata('error'); ?>' !== '') {
            var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
            errorModal.show();
            <?php unset($_SESSION['error']); ?>
        }
    });
</script>
</body>

</html>