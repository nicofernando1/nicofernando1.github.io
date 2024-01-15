  <!-- Header -->
  <?=include "header.php" ?> 
  <!-- /Header -->

  <!-- Navbar -->
  <?=include "navbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url();?>/assets/image/logoe.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8 " >
      <span class="brand-text font-weight-light">Pertamina</span>
    </a>

    <!-- Sidebar -->
    <?= include "sidebar.php";?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page head  er) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <?= $content ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Footer -->
  <?= include "footer.php" ?>
  <!-- /Footer -->