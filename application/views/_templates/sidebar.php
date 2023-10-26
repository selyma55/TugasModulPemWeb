 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('user') ?>" class="brand-link">
      <img src="<?= base_url('assets/vendors/adminlte/') ?>dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Presensi</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('user') ?>" class="d-block"><?= $user['name']; ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Profil</li>
          <li class="nav-item">
            <a href="<?= base_url('user')?>" class="nav-link">
              <i class="nav-icon fas fa-fw fa-user"></i>
              <p>
                Profil Saya
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/edit')?>" class="nav-link">
              <i class="nav-icon fas fa-fw fa-user-edit"></i>
              <p>
                Edit Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/changepassword')?>" class="nav-link">
              <i class="nav-icon fas fa-fw fa-key"></i>
              <p>
                Ganti Password
              </p>
            </a>
          </li>
          <li class="nav-header">Pengaturan</li>
          <li class="nav-item">
            <a href="<?= base_url('auth/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
