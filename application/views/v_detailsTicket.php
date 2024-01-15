<div class="row">


    <div class="col-md-7">
      <div class="card-wrapper">
        <div class="card">
          <div class="card-header bg-primary">
            <h3 class="mb-0 "><?= $reason ?></h3>
              <span class="float-right text-success font-weight-bold" style="margin-top: -30px;"></span>
          </div>
 

          <div class="card-body p-0">
            <table class="table align-items-center table-flush table-striped">
              <tr>
                <td>Topic</td>
                <td><b><?= $isidata-> Topic?></b></td>
              <tr>
                <td>Uraian masalah</td>
                <td style="max-width:150px; max-height:150px;"><?= $isidata-> Uraianmasalah ?></td>
              </tr>
              <?php if ($isidata->status != 'Request') {?>
              <tr>
                <td>Uraian Pekerjaan</td>
                <td style="max-width:150px; max-height:150px;"><?= $isidata-> uraianprogress ?> </td>
              </tr>
              <?php }?>
              <tr>
                <td>Lokasi</td>
                <td><?= $isidata->lokasi?></td>
              </tr>
              <tr>
                <td>Status</td>
                <td><?=$isidata->status?></td>
              </tr>
              <tr>
                <td>Dokumentasi</td>
                <td> <img src='<?= base_url()?>assets/uploads/<?=$isidata->Documentation;?>' class="rounded img img-fluid" style="max-width: 150px;"></td>
              </tr>
              <div class="text-center">
                <td></td>
                <td><a href="<?php echo site_url('ticket/downloadDocs/'.$isidata->Id_Ticket); ?>" class="btn btn-primary" style="margin-left: 190x;" >Unduh Dokumentasi </a></td>
              </div>
            </table>
          </div>

          <div class="card-footer">
          <a href="<?= site_url('dataticket')?>" class="btn btn-danger">Kembali</a>
            <form action="" method="POST">
              <input type="hidden" name="order" value="">
              <div class="row">
                <div class="col-md-10">
                </div>
                <!-- <div class="col-md-2">
                  <div class="text-right">
                    <input type="submit" value="###" class="btn btn-md btn-primary">
                  </div>
                </div> -->
              </div>
            </form>
          </div>
        </div>



      </div>

    </div>
    <div class="col-md-5">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="mb-0"><?= $subjudul ?></h3>
        </div>
        <div class="card-body p-0">
          <table class="table align-items-center table-flush table-hover">
            <tr>
              <td>No Ticket</td>
              <td><b><?= $isidata-> No_Ticket?></b></td>
            </tr>
            <tr>
            <td>Tanggal</td>
            <td><?= $isidata-> Tanggal ?></td>
            </tr>
            <tr>
              <td>User</td>
              <td><?= $isidata->User?></td>
            </tr>
            <tr>
              <td>PIC</td>
              <td><?= $isidata->Pic?></td>
            </tr>
            <tr>
              <td>Departemen</td>
              <td><?= $isidata->Departemen?></td>
            </tr>
          </table>
        </div>
      </div>



      <!-- <div class="card card-primary" id="#payments">
        <div class="card-header">
          <h3 class="mb-0">Pembayaran</h3>
        </div>
        <div class="card-body">
              <div class="alert alert-info m-2">Tidak ada data pembayaran.</div>
          

              <div>
                <img class="img img-fluid" src="">
              </div>

              
                <br>
                <div class="alert alert-info" id="payment_flash"></div>
            

              <table class="table align-items-center table-flush table-hover">
                <tr>
                  <td>Transfer</td>
                  <td><b></b></td>
                </tr>
                <tr>
                  <td>Tanggal</td>
                  <td><b></b></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td><b>
                    </b></td>
                </tr>
                <tr>
                  <td>Transfer ke</td>
                  <td>
                    <div style="white-space: initial;"><b>
                      
                      </b></div>
                  </td>
                </tr>
                <tr>
                  <td>Transfer dari</td>
                  <td>
                    <div style="white-space: initial;">
                      <b></b>
                    </div>
                  </td>
                </tr>
              </table>
            
            <div class="alert alert-info">
              Order ini menggunakan metode pembayaran ditempat. Tidak memerlukan konfirmasi pembayaran.
            </div>
          
        </div>
        
          <div class="card-footer">
            <form action="" method="POST">
              <div class="row">
                <input type="hidden" name="id" value="">
                <input type="hidden" name="order" value="">
                <div class="col-md-9">
                  <select class="form-control" name="action">
                      <option value="1">Konfirmasi Pembayaran</option>
                      <option value="2">Pembayaran Tidak Ada</option>
                
                      <option value="4" readonly>Tidak ada pilihan</option>
                  </select>
                </div>
                <div class="col-md-3 text-right">
                  <input type="submit" class="btn btn-primary" value="OK">
                </div>
              </div>
            </form>
          </div>
       
      </div> -->
    </div>
  </div>

  <script>
    
  </script>