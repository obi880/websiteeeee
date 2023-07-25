<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?= $title; ?></title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Custom fonts for this template -->
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/one-page-wonder.css" rel="stylesheet">
  <style>
    .custom-image {
      width: 200px; /* Adjust the width as needed */
      height: auto; /* Maintain aspect ratio */
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="my-auto text-center">
          <img src="assets/img/esgul.jpg" alt="Image" class="custom-image">
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">WEBSITE PENJADWALAN SIDANG</h1>
                <h2 class="h4 text-gray-900 mb-4"></h2>
                <h5 class="h4 text-gray-900 mb-4">User Login</h5>
              </div>
              <?php echo $this->session->flashdata('msg'); ?>
              <form class="user" method="post" action="<?= base_url('page/login') ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nis" name="nis" value="<?php echo set_value('nis'); ?>" aria-describedby="emailHelp" placeholder="Enter your NIM" autocomplete="off">
                  <?php echo form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                  <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('page/admin') ?>">Login as Administrator?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
