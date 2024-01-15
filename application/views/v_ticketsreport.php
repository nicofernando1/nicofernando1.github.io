<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $judul?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>/assets/dist/css/adminlte.min.css">
</head>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $subjudul ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $judul ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
<body class="hold-transition sidebar-mini">
  
<!-- /.row -->
<div class="row">
          <div class="col-12 ">
            <div class="card col-md-12">
              <div class="card-header bg-primary">
                <h3 class="card-title"><?= $judul ?></h3>

                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <ib class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap ">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>No Ticket</th>
                      <th>Tanggal Request</th>
                      <th>PIC</th>
                      <th>Status</th>
                      <th>Location</th>
                      <th>Topic</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i=1;
                    foreach($isidata as $key) {?>
                    <tr>
                      <td><small><?=$i++ ?></small></td>
                      <td><?=anchor ('dataticket/detailticketAdm/'.$key->Id_Ticket,''.$key->No_Ticket);?></td>
                      <td><?=$key->Tanggal;?></td>
                      <td><?=$key->Pic?></td>
                      <td>
                        <?php if ($key->status== 'Request') {
                          echo '<span class="badge badge-info">Request</span>';
                        } else if ($key->status == 'Assigned') {
                          echo '<span class="badge badge-primary">Assigned <span>';
                        } else if ($key->status == 'Progress') {
                        echo '<span class="badge badge-secondary">Progress </span>';    
                      } else if($key->status == 'Pending'){
                        echo '<span class="badge badge-warning">Pending</span>';
                      } else if($key->status == 'Resolved'){
                        echo '<span class="badge badge-success">Resolved</span>';
                      }else {
                        echo '<span class="badge badge-danger">Rejected</span>';
                      }
                      ?>
                      </td>
                      <td><?= $key->lokasi ?></td>  
                      <td><?= $key->Topic ?></td>
                      <td><?=  substr($key->Uraianmasalah,0,20) ?>...</td>
                    </tr>
                      <?php }?>
                  </tbody>
                </table>
              </div>
  
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

          <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>/assets/dist/js/demo.js"></script>
</body>
</html>