 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link bg-info">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Aplikasi Rental Mobil Sejahtera</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
          <i class="fas fa-user-circle fa-2x text-light img-circle elevation-2"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block text-uppercase"><?php echo $this->session->userdata('USERNAME');?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url();?>index.php/dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url();?>index.php/sewa" class="nav-link">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Daftar Sewa
              </p>
            </a>
          </li>
          <?php if($this->session->has_userdata('ROLE') != "public") { ?>
          <li class="nav-item">
            <a href="<?= base_url();?>index.php/sewamobil" class="nav-link">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Sewa Mobil
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>
                Mobil
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url();?>index.php/merk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Merk Mobil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url();?>index.php/mobil" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Mobil</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Perawatan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url();?>index.php/perawatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perawatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url();?>index.php/jenisperawatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Perawatan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url();?>index.php/users" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Kelola Akun
              </p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a href="<?= base_url();?>index.php/auth/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
