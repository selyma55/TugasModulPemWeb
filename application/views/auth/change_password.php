<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-color: #f4f6f9; /* Ganti warna latar belakang sesuai kebutuhan */
    }

    .login-box {
      max-width: 400px; /* Ganti lebar sesuai kebutuhan */
      width: 100%;
      background-color: #fff; /* Ganti warna latar belakang sesuai kebutuhan */
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Ganti bayangan sesuai kebutuhan */
    }

    .login-logo a {
      font-size: 24px; /* Ganti ukuran font sesuai kebutuhan */
      font-weight: bold;
      text-decoration: none;
    }
    
    .login-box-msg {
      font-size: 18px; /* Ganti ukuran font sesuai kebutuhan */
      margin-bottom: 20px;
    }
    
    .input-group {
      margin-bottom: 15px;
    }
    
    .btn-block {
      background-color: #007bff; /* Ganti warna tombol sesuai kebutuhan */
      color: #fff; /* Ganti warna teks tombol sesuai kebutuhan */
      font-weight: bold;
    }
    
    .btn-block:hover {
      background-color: #0056b3; /* Ganti warna latar belakang saat hover sesuai kebutuhan */
    }
    
    .mb-1 {
      margin-bottom: 10px;
    }
    
    /* Tambahan jika diperlukan */
    .text-danger {
      color: #dc3545; /* Ganti warna teks sesuai kebutuhan */
    }
  </style>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url() ?>">PRESENSI</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Change your password for </p>
                <p class="login-box-msg"><?= $this->session->userdata('reset_email'); ?></p>

                <?= $this->session->flashdata('message'); ?>

                <form action="<?= base_url('auth/changePassword') ?>" method="post">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password1">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password" name="password2">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <hr>
                <p class="mb-1">
                    <a href="<?= base_url('auth') ?>">Back to Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</body>
</html>
