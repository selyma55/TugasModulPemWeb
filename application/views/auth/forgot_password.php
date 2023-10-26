<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password Page</title>
  
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-box {
      max-width: 400px;
      width: 100%;
      text-align: center;
    }

    .login-logo {
      text-align: center;
    }

    .card.login-card-body {
      padding: 20px;
    }

    .btn-primary {
      width: 100%;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
        <a href="<?= base_url() ?>">PRESENSI</a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Forgot Password?</p>
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('auth/forgotPassword') ?>" method="post">
          <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
            </div>
          </div>
        </form>
        <hr>
        <p class="mb-1">
          <a href="<?= base_url('auth') ?>">Back to Login</a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
