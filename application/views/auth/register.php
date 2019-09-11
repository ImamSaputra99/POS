
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="<?= base_url('auth/registrasi');  ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>"><small class="text-danger"><?= form_error('name'); ?></small>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>"><small class="text-danger"><?= form_error('email'); ?></small>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password1" name="password1" placeholder="Password"><small class="text-danger"><?= form_error('password1'); ?></small>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password2" name="password2" placeholder="Retype password"><small class="text-danger"><?= form_error('password2'); ?></small>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
     <div class="row">
        <div class="col-xs-8">         
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
<br>
    <div>

    <a href="<?= base_url('auth'); ?>" class="text-center" >I already have a membership</a>
</div>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

