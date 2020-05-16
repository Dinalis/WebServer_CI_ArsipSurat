<div id="login-page">
    <div class="container">
      <form class="form-login" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="<?php echo base_url('registrasi/doRegister') ?>">
        <h2 class="form-login-heading" align="center">Create an Account</h2>
        <div class="login-wrap">
          
          <input type="text" class="form-control" placeholder="Name" name="nama" id="nama" required="" autofocus>
          <br>
          <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>

          <input type="text" class="form-control" placeholder="USERNAME" name="user" id="username" required="" autofocus>
          <br>
          <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>

          <input type="text" class="form-control" placeholder="PASSWORD" name="pass" id="password" required="" autocomplete="new-password">
          <br>
          <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>') ?>

          <input class="btn btn-theme btn-block" type="submit" name="submit"><i class="fa fa-lock"></i> Daftar Akun </input>
          <br>

          <div class="alert alert-info" role="alert" align="center">
          <?php 
            if (isset($pesan)) {
              echo $pesan;
            } else {
              echo "Isikan data dengan benar!";
            }
            
           ?>
         </div>
          <hr>

          <div class="login-social-link centered">
              <p>or you can sign in via your social network</p>
              <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
              <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div>
          <div class="registration">
            Forgot Password?<br/>
            <a class="" href="<?php echo base_url('login/index') ?>">
              Sudah Punya Akun? Silahkan Login
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>

              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>

            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>