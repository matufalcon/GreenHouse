<style>
    .gradient-custom-2 {
        /* fallback for old browsers */
        background: #0a3440;

        background-color: #0a3440;
        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #6EB157, #1B9142, #327CC1, #1C5A95);

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, #6EB157, #1B9142, #327CC1, #1C5A95);
    }
</style>

<section class="h-100 gradient-form" style="background-color: #0a3440;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="100"
                                        height="100" class="d-inline-block align-middle" style="margin-right: 10px;">
                                    <h4 class="mt-1 mb-5 pb-1">We are Green house</h4>
                                </div>
                                <form action="<?= base_url() ?>login" method="post">
                                    <?= csrf_field() ?>
                                    <p>Complete los datos para iniciar sesion</p>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="email" id="email" class="form-control" name="email"
                                            value="<?= set_value('email') ?>" placeholder="Email" />
                                        <label class="form-label" for="form2Example11">Email</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="password" class="form-control" name="contraseña"
                                            placeholder="Contraseña" />
                                        <label class="form-label" for="form2Example22">Contraseña</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                            type="submit">Log
                                            in</button>
                                        <hr>

                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">No tienes una cuenta?</p>
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-outline-danger"><a class="text-muted"
                                                href="<?= base_url() ?>register">Registrarse</a></button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <?php if (isset($validation)): ?>

                                <div class="alert alert-danger" style="width: 100%; text-align: center;">

                                    <?php if (is_string($validation)): ?>
                                        <?= $validation ?>
                                    <?php else: ?>
                                        <?= $validation->listErrors() ?>
                                    <?php endif; ?>
                                </div>

                            <?php else: ?>
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            <?php endif; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>