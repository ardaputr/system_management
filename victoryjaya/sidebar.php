  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="img/vj.png" alt="Chart Icon" style="width: 32px;">
        </div>
        <div class="sidebar-brand-text mx-3" style="color: rgb(228, 214, 15);">Victory jaya</div>
      </a>

      <div class="sidebar-heading" style="color: black;">
        Menu
      </div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="catalog.php">
          <i class="fas fa-fw fa-tachometer-alt" style="color: #000000;"></i>
          <span style="color: grey;" onmouseover="this.style.color='#000000'" onmouseout="this.style.color='grey'">Catalog</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
      <?php if ($_SESSION['id'] == 1) { ?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt" style="color: #000000;"></i>
          <span style="color: grey;" onmouseover="this.style.color='#000000'" onmouseout="this.style.color='grey'">Dashboard</span></a>
      </li>
      <?php } ?>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading" style="color: #000000;">
        Transaksi
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pendapatan.php">
          <i class="fas fa-fw fa-arrow-up" style="color: black;"></i>
          <span style="color: grey; font-weight: bold" onmouseover="this.style.color='#000000'" onmouseout="this.style.color='grey'">Pemasukan</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pengeluaran.php">
          <i class="fas fa-fw fa-arrow-down" style="color: #000000;"></i>
          <span style="color: grey; font-weight: bold" onmouseover="this.style.color='#000000'" onmouseout="this.style.color='grey'">Pengeluaran</span>

        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading" style="color: #000000;">
        Produk
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="produk.php">
          <i class="fas fa-fw fa-arrow-up" style="color: black;"></i>
          <span style="color: grey; font-weight: bold" onmouseover="this.style.color='#000000'" onmouseout="this.style.color='grey'">Data Produk</span>
        </a>
      </li>

      <!-- Heading -->
      <?php if ($_SESSION['id'] == 1) { ?>
      <div class="sidebar-heading" style="color: black;">
        Karyawan
      </div>
      <?php } ?>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php if ($_SESSION['id'] == 1) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="karyawan.php">
          <i class="fas fa-fw fa-users" style="color: #000000;"></i>
          <span style="color: grey; font-weight: bold" onmouseover="this.style.color='#000000'" onmouseout="this.style.color='grey'">Karyawan</span>
        </a>
      </li>
      <?php } ?>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      
      <div class="sidebar-heading" style="color: black;">
        Tagihan
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="hutang.php">
          <i class="fas fa-fw fa-chart-area" style="color: black;"></i>
          <span style="color: grey; font-weight: bold" onmouseover="this.style.color='#000000'" onmouseout="this.style.color='grey'">Hutang</span>
        </a>
      </li>

      <!-- Heading -->
      <?php if ($_SESSION['id'] == 1) { ?>
      <div class="sidebar-heading" style="color: #000000;">
        Transaksi
      </div>
      <?php } ?>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php if ($_SESSION['id'] == 1) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="laporan-pengeluaran.php">
          <i class="fas fa-fw fa-table" style="color: black;"></i>
          <span style="color: grey; font-weight: bold" onmouseover="this.style.color='#000000'" onmouseout="this.style.color='grey'">Laporan Pengeluaran</span>
        </a>
      </li>
      <?php } ?>

      <!-- Nav Item - Tables -->
      <?php if ($_SESSION['id'] == 1) { ?>
      <li class="nav-item">
        <a class="nav-link" href="laporan.php">
          <i class="fas fa-fw fa-table" style="color: black;"></i>
          <span style="color: grey; font-weight: bold" onmouseover="this.style.color='#000000'" onmouseout="this.style.color='grey'">Laporan Keuangan</span>
        </a>
      </li>
      <?php } ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" style="background-color: black; color: white;"></button>
      </div>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">