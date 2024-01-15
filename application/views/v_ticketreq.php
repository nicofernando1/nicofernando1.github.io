<section class="content">
  <?= $this->session->flashdata('pesan') ?>
      <div class="container-fluid">
        <?= form_open_multipart('ticket/ticketreq')?>
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Ticket Request</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="">No Ticket</label>
                    <input type="text" class="form-control" name="noTicket" placeholder="No Ticket" value="<?= no_code() ?>" readonly>
                  </div>
                  <div class="form-group" hidden>
                    <label for="">Id Ticket</label>
                    <input type="text" class="form-control" name="idTicket" placeholder="Id Ticket" disabled>
                  </div>
                  
                  <!-- <div class="row form-group">
                    <label for="date" class="col-sm-1 col-form-label">Date</label>
                    <div class="col-sm-4">
                      <div class="input-group-date" id="datepicker">
                        <input type="text" class="form-control">
                        <span>
                          <i class="fa fa-calendar"></i>
                        </span>

                      </div>
                    </div>

                  </div> -->
                  <div class="form-group">
                    <label for="">User</label>
                    <input type="" class="form-control" name="user" placeholder="User" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="">PIC</label>
                    <input type="" class="form-control" name="pic" placeholder="PIC" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="">Departemen</label>
                    <input type="" class="form-control" name="departemen" placeholder="Departemen"autocomplete="off">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?= site_url('ticket')?>" class="btn btn-danger">Kembali</a>
                  <button type="submit" name="simpan" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
           
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Information</h3>
              </div>
              <div class="card-body">
              <div class="form-group">
                    <label for="">Topic</label>
                    <input type="text" class="form-control" name="topic" placeholder="Topic" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="">Deskripsi Masalah</label>
                    <input type="" class="form-control" name="uraianMasalah" placeholder="Uraian Masalah" autocomplete="off">
                  </div>

                  <!-- <div class="form-group">
                  <label class="form-control-label" for="">Deskripsi Masalah</label>
                  <textarea type="text" name="uraianMasalah"class="form-control" rows="3"></textarea>
                  </div> -->

                  <div class="form-group">
                      <label for="lokasi">Location</label>
                      <select class="form-control" name="location">
                        <?php foreach ($isidata as $key ) { ?> 
                        <option value="<?= $key->name_location ?>"><?= $key->name_location ?></option>
                        <?php  }?>
                      </select>
                  </div>
                  <div class="form-group" >
                    <label for="status">Status</label>
                    <select class="form-control" name="statu" placeholder="lokasi" readonly>
                      <?php foreach ($isiloc as $loc) { ?>
                      <option value="<?= $loc->name_status ?>" readonly> <?= $loc->name_status?></option>
                      <?php }?>
                    </select>
                  </div>  
                  <!-- <div class="form-group">
                    <label for="">Status</label>
                    <input type="" class="form-control" name="statu" placeholder="" value="Request" readonly>      
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputFile">Documentation</label>
                    <div>
                    <small class="text-muted">Pilih foto PNG atau JPG dengan ukuran maksimal 2MB</small>
                    </div>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="documentation" class="form-control">
                        <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                      </div>
                       <div class="input-group-append">
                       <!-- <small class="text-muted">Pilih foto PNG atau JPG dengan ukuran maksimal 2MB</small> -->
                      </div>
                    </div>
                  </div>
                <!-- <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                <br>
                <input class="form-control" type="text" placeholder="Default input">
                <br>
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- general form elements disabled -->
            <!-- /.card -->
            <!-- general form elements disabled -->
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
        <?= form_close() ?>
      </div><!-- /.container-fluid -->

    </section>
    <script type="text/javascript">
      $(function(){
        $('#datepicker').datepicker();
      });

    </script>