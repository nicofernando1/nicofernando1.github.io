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
  <?= $this->session->flashdata('pesan') ?>
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Location EP Limau Field</h1>
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
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap ">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Id Location</th>
                      <th>Nama Lokasi</th>
                      <th>Lainnya</th>
                      <th> <div class="float-right" style="margin-top: -10px">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal" ><i class="fas fa-plus"></i>Tambah</button>
                        </div></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $i = 0;
                     foreach($datas as $key)  :?>
                    <tr>
                        <td><?= ++$i ?></td>
                        <td><?= $key['id_location'] ?></td>
                        <td><?=$key['name_location']?></td>
                        <td>
                        <a href="<?= site_url('location/edit/'.$key['id_location'])?>" class="btn btn-success" ><i class="fa fa-edit"></i></a>
                          <a href="<?= site_url('location/delete/' . $key['id_location']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ; ?>
                  </tbody>
                </table>
                <?= $pagination ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

  <div id="tambahModal" class="modal fade">
		<div class="modal-dialog" role="document">
			<!-- content modal-->
			<div class="modal-content ">
				<!-- heading modal -->
				<div class="modal-header bg-success">
          <h5 class="modal-title text-center">Tambah  &nbsp;<?= $judul ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="trus">&times;</span>
          </button>
				</div>
				<!-- body modal -->
				<div class="modal-body p-0">
          <div class="card bg-secondary border-0 mb-0">
        <?= form_open('location/addLoc')?>
        <div class="card-body">
          <div class="form-group mb-3">
             <label for="">Id Location</label>
              <input type="text" class="form-control" name="idLok" placeholder="Masukan Id Lokasi" autocomplete="off">
          </div>
          <div class="form-group mb-3">
             <label for="">Name Location</label>
              <input type="text" class="form-control" name="lokas" placeholder="Masukan Nama Lokasi" autocomplete="off">
          </div>
          
          </div>
          <!-- footer modal -->
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            <button type="submit" name="kirim" class="btn btn-primary" >Tambah Lokasi</button>
          </div>

        </div>
        <?= form_close()?>
        </div>
			</div>
		</div>
	</div>

  <!-- <div class="modal fade" id="editModal"  role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog modal-md" role="document">
      <div class="modal-content">
          <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                  <div class="card-header bg-transparent">
                      <h3 class="card-heading text-center mt-2">Edit Lokasi</h3>
                  </div>
                  <div class="card-body px-lg-5 py-lg-5">
                      
                  <?= form_open('location/edit/'.$key['id_location'])?>
                          <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                  </div>
                                  <input name="name" class="form-control edit-name" placeholder="Edit" value="<?= $key->Id_Location?>" type="text">
                                </div>
                                <div class="text-danger err name-error"></div>
                          </div>

                          <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                  </div>
                                  <input name="name" class="form-control edit-name" placeholder="Nama paket" type="text" minlength="4" maxlength="100" required>
                                </div>
                                <div class="text-danger err name-error"></div>
                          </div>
                          
                          <div class="text-left">
                              <button type="button" class="btn btn-secondary my-4" data-dismiss="modal">Batal</button>
                          </div>
                          <div class="float-right" style="margin-top: -90px">
                            <button type="submit" class="btn btn-primary my-4 editPackageBtn">Simpan</button>
                        </div>
                 <?= form_close() ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div> -->

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