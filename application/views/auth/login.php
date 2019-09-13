
<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url('auth'); ?>">My<b>POS</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <?= $this->session->flashdata('pesan'); ?>
    <form action="<?= base_url('auth'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="email" name="email" placeholder="Email"><small class="text-danger"><?= form_error('email'); ?></small>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password"><small class="text-danger"><?= form_error('password'); ?></small>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   <br>
<div class="text-center">

    <a href="#">I forgot my password</a><br>
    <a href="<?= base_url('auth/registrasi'); ?>" class="text-center">Register a new membership</a>
</div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
