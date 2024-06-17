<section class="h-100 gradient-form" style="background-color: #0a3440;">

    <div class="container py-1 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-6">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-12 d-flex align-items-center gradient-custom-2">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="100"
                                        height="100" class="d-inline-block align-middle" style="margin-right: 10px;">
                                    <h4 class="mt-1 mb-5 pb-1" style="color: white;">Somos 'Green house'</h4>
                                </div>

                                <?php if (session()->getFlashdata('msg')): ?>
                                    <div class="alert alert-danger">
                                        <?= session()->getFlashdata('msg') ?>
                                    </div>
                                <?php endif; ?>

                                <form action="<?= base_url() ?>login" method="post">
                                    <?= csrf_field() ?>

                                    <?php if (isset($validation)): ?>
                                        <div class="alert alert-danger" style="width: 100%; text-align: center;">
                                            <?php if (is_string($validation)): ?>
                                                <?= $validation ?>
                                            <?php else: ?>
                                                <?= $validation->listErrors() ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11"
                                            style="color: white;">Usuario</label>
                                        <input id="usuario" class="form-control" name="usuario"
                                            value="<?= set_value('usuario') ?>" placeholder="Usuario" />
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="form2Example22"
                                            style="color: white;">Contraseña</label>
                                        <input type="password" id="password" class="form-control" name="contraseña"
                                            placeholder="Contraseña" />
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light"
                                            type="submit">Iniciar sesion</button>
                                        <hr>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-outline-light">
                                            <a class="text-muted" href="<?= base_url() ?>register">Registrarse</a>
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>