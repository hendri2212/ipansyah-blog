<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; admin</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/fontawesome/css/all.min.css')?>">


  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-social/bootstrap-social.css')?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/components.css')?>">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-2">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">admin Login</div>
            <?php
              if (@$keluar) {
                echo $keluar;
              } ?>
            <div class="card card-primary">
              <div class="card-body">
                <?php echo form_open('login/cekLogin', 'class="needs-validation" novalidate=""') ?>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <!-- <div class="input-group-text">@</div> -->
                        </div>
                      <input type="text" class="form-control" name="username" tabindex="1" required autofocus>
                      <div class="invalid-feedback">
                        Username tidak boleh Kosong!
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    	<label for="password" class="control-label">Password</label>
                    <input type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Password tidak boleh Kosong!
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">Login</button>
                    <a href="<?= base_url(); ?>../index.php" class="btn btn-success btn-lg btn-block" tabindex="5">Halaman Utama</a>
                  </div>
                </form>

              </div>
            </div>
            <div class="simple-footer">
              Powered By <a href="https://wa.me/6285746080544?text=Assalamualaikum%2C%20salam%20kenal%20HENDRI%20ARIFIN%2C%20S.Kom%20%F0%9F%98%81">Hendri Arifin, S.Kom</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo base_url('assets/modules/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/popper.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/tooltip.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/nicescroll/jquery.nicescroll.min.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/moment.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/stisla.js')?>"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/js/page/modules-datatables.js')?>"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
  <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
</body>
</html>
