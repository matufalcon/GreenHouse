<section class="h-100 gradient-form content" style="background-color: #0a3440;">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="100" height="100"
                    class="d-inline-block align-middle" style="margin-right: 10px;"> 
                </div>

                <?php $validation = \Config\Services::validation(); ?>
                <form action="<?= base_url() ?>register" method="post">
                  <?= csrf_field() ?><br>
                  
                  <p>Complete los datos para registrarse</p>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" value="<?= set_value('nombre') ?>"
                      placeholder="Nombre" />
                      <!-- Error -->
                      <?php if ($validation->getError('nombre')) { ?>
                      <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('nombre'); ?>
                      </div>
                    <?php } ?>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="apellido">Apellido</label>
                    <input class="form-control" type="text" name="apellido" value="<?= set_value('apellido') ?>"
                      placeholder="Apellido" />
                      <!-- Error -->
                      <?php if ($validation->getError('apellido')) { ?>
                      <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('apellido'); ?>
                      </div>
                    <?php } ?>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="email">Correo electrónico</label>
                    <input class="form-control" type="text" name="email" value="<?= set_value('email') ?>"
                      placeholder="Correo electrónico" />
                      <!-- Error -->
                      <?php if ($validation->getError('email')) { ?>
                      <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('email'); ?>
                      </div>
                    <?php } ?>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="usuario">Usuario</label>
                    <input class="form-control" type="text" name="usuario" value="<?= set_value('usuario') ?>"
                      placeholder="Usuario" />
                    <!-- Error -->
                    <?php if ($validation->getError('usuario')) { ?>
                      <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('usuario'); ?>
                      </div>
                    <?php } ?>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="contraseña">Contraseña</label>
                    <input class="form-control" type="password" name="contraseña" placeholder="Contraseña" />
                    <!-- Error -->
                    <?php if ($validation->getError('contraseña')) { ?>
                      <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('contraseña'); ?>
                      </div>
                    <?php } ?>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="password_confirm">Confirmar contraseña</label>
                    <input class="form-control" type="password" name="password_confirm" placeholder="Confirmar contraseña" />
                    <!-- Error -->
                    <?php if ($validation->getError('password_confirm')) { ?>
                      <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('password_confirm'); ?>
                      </div>
                    <?php } ?>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button data-mdb-button-init data-mdb-ripple-init
                      class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrarse</button>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">¿Ya tienes una cuenta?</p>
                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                      class="btn btn-outline-info"><a class="text-muted" href="<?= base_url() ?>login">Iniciar sesión</a></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">¡Somos tu cabaña segura!</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
