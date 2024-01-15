<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><?= $judul?></h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!-- <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href=""><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="">Produk</a></li>
                  <li class="breadc rumb-item"><a href=""></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
              </nav> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <input type="hidden" name="id" value="">

      <div class="row">
        <div class="col-md-7">
          <div class="card-wrapper">
            <div class="card">
              <div class="card-header">
                <h3 class="mb-0"><?= $subjudul?></h3>
                <?= form_open_multipart('ticket/update/'.$isidata->Id_Ticket) ?>
                <span class="float-right text-success font-weight-bold" style="margin-top: -30px">
                </span>
              </div>
              
              <div class="card-body">
                <!-- <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-control-label">Nomor Ticket</label>
                      <input class="form-control" type="text" name="noTick"value="<?= $isidata->No_Ticket?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-control-label">Tanggal Request</label>
                      <input class="form-control" value="<?= $isidata->Tanggal?>" type="text" readonly>
                    </div>
                  </div>
                </div> -->
                
                <div class="form-group">
                  <label class="form-control-label">Topik</label>
                  <div class="input-group mb-3">
                    <input type="text" name="topic" value="<?= $isidata->Topic?>" class="form-control" id="" autocomplete="off">
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-control-label" for="desc">Uraian masalah :</label>
                    <input name="description" style="height: 50px;" value="<?= $isidata->Uraianmasalah ?>" class="form-control form-control-lg" id="desc" autocomplete="off">
                </div>

                <div class="form-group">
                  <label class="form-group-label"> Uraian pekerjaan :</label>
                  <input name="uraianpekerjaan" value="<?= $isidata->uraianprogress ?>" class="form-control ">
                </div>
                
                <!-- <div class="form-group">
                      <label class="form-control-label">Progress Ticket</label>
                      <div class="input-group mb-3">
                        <input type="text" name="topic" value="<?= $isidata->Topic?>" class="form-control" id="" autocomplete="off">
                      </div>
                    </div> -->
                    
                <!-- <div class="form-group">
                  <label class="form-control-label" for="name">User</label>
                  <input type="text" name="users" value="<?= $isidata->User?>" class="form-control" id="" autocomplete="off">
                </div>
                
                <div class="form-group">
                  <label class="form-control-label" for="name">PIC</label>
                  <input type="text" name="pic" value="<?= $isidata->Pic?>" class="form-control" id="" autocomplete="off">
                </div>
                
                <div class="form-group">
                  <label class="form-control-label" for="name">Departemen</label>
                  <input type="text" name="departemen" value="<?= $isidata->Departemen?>" class="form-control" id="" autocomplete="off">
                </div> -->
                
                
                <div class="row">
                  <div class="col-6">
                    <!-- <div class="form-group">
                      <label class="form-control-label" for="price">Topic</label>
                      <div class="input-group mb-3">
                        <input type="text" name="topic" value="<?= $isidata->Topic?>" class="form-control" id="" autocomplete="off">
                      </div>
                      
                    </div> -->
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                  <!-- <label class="form-control-label" for="price_d">Locations</label> -->
                  <!-- <div class="input-group mb-3">
                    <input type="text" name="location" value="<?= $isidata->lokasi?>" class="form-control" id="" autocomplete="off">
                  </div> -->
                   
                </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label class="form-control-label" for="stock">Tanggal Selesai</label>
                      <input type="text" name="tanggalselesai" value="<?=$isidata->Tanggal_selesai ?>" class="form-control" id="" autocomplete="off">
                     
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label class="form-control-label">Status</label>
                      <select class="form-control" name="statu" placeholder="<?= $isidata->status ?>">
                        <option>Assigned</option>
                        <option>Progress</option>
                        <option>Pending</option>
                        <option>Resolved</option>
                    
                      </select>
                    </div>
                  </div>
                  <div class="text-center">
                    <img src='<?= base_url()?>assets/uploads/<?=$isidata->Documentation;?>' class="img img-thumbnail round ml-2" style="max-width: 400px;">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="pic">Ganti Foto:</label>
                        <input type="file" value="<?= $isidata->Documentation?>" name="documentation" class="form-control" id="pic">
                        <!-- <input type="file" name="picture" class="form-control" id="pic"> -->
                        <small class="text-muted">Pilih foto PNG atau JPG dengan ukuran maksimal 2MB</small>
                    </div>
                </div>
                <div class="card-footer text-left">
                    <input type="submit" value="Simpan" name="ubah" class="btn btn-primary">
                </div>
                
                
                
                
                

                <!-- <div class="form-group">
                  <label class="form-control-label" for="desc">Deskripsi Masalah:</label>
                    <input name="description" style="height: 50px;" value="<?= $isidata->Uraianmasalah ?>" class="form-control form-control-lg" id="desc" autocomplete="off"></input>
                </div> -->
                
                
              </div>
              
              
            </div>
            
          </div>
          
        </div>
        <div class="col-md-5">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-6">
                  <h3 class="mb-2">Detail Ticket</h3>
                </div>
                
                
              </div>
            </div>
            <div class="card-body">
              
              <div class="form-group">
                <label class="form-control-label">Nomor Ticket</label>
                <input class="form-control" type="text" name="noTick"value="<?= $isidata->No_Ticket?>" readonly>
              </div>
              
              <div class="form-group">
                <label class="form-control-label">Tanggal Request</label>
                <input class="form-control" value="<?= $isidata->Tanggal?>" type="text" readonly>
              </div>
              
              <div class="form-group">
                <label class="form-control-label" for="name">User</label>
                <input type="text" name="users" value="<?= $isidata->User?>" class="form-control" id="" autocomplete="off" readonly>
              </div>
              
              <div class="form-group">
                <label class="form-control-label" for="name">PIC</label>
                <input type="text" name="pic" value="<?= $isidata->Pic?>" class="form-control" id="" autocomplete="off" readonly>
              </div>
              
              <div class="form-group">
                <label class="form-control-label" for="name">Departemen</label>
                <input type="text" name="departemen" value="<?= $isidata->Departemen?>" class="form-control" id="" autocomplete="off" readonly>
              </div>

              <div class="form-group">
                <label class="form-control-label" for="name">Location</label>
                <input type="text" name="location" value="<?= $isidata->lokasi?>" class="form-control" id="" autocomplete="off" readonly>
              </div>

              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-current" role="tabpanel" aria-labelledby="pills-home-tab">
                      <div class="text-center">
                                <img alt="" class="img img-fluid rounded">
                            </div>
                        </div>
                        <!-- <img src='<?= base_url()?>assets/uploads/<?=$isidata->Documentation;?>' class="img img-thumbnail round"> -->
                        <!-- <img src='<?= base_url()?>assets/uploads/<?=$isidata->Documentation;?>' class="img img-fluid round" style="max-width: 100%;"> -->
                        <div class="tab-pane fade" id="pills-edit" role="tabpanel" aria-labelledby="pills-profile-tab">
                          <div class="form-group">
                              <label class="form-control-label" for="pic">Foto:</label>
                                <!-- <input type="file" value="<?= $isidata->Documentation?>" name="picture" class="form-control" id="pic"> -->
                                <small class="text-muted">Pilih foto PNG atau JPG dengan ukuran maksimal 2MB</small>
                                <small class="newUploadText">Unggah file baru untuk mengganti foto saat ini.</small>
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="pills-delete" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <p class="deleteText">Klik link dibawah untuk menghapus foto. Tindakan ini tidak dapat dibatalkan.</p>
                            <div class="text-right">
                                <a href="#" class="deletePictureBtn btn btn-danger">Hapus</a>
                            </div>
                        </div> -->
                    </div>
                    
                    <!-- <div class="form-group">
                        <label class="form-control-label" for="pic">Ganti Foto:</label>
                        <input type="file" name="picture" class="form-control" id="pic">
                        <small class="text-muted">Pilih foto PNG atau JPG dengan ukuran maksimal 2MB</small>
                    </div> -->
                    
                </div>
                <!-- <div class="card-footer text-right">
                    <input type="submit" value="Simpan" name="ubah" class="btn btn-primary">
                </div> -->
            </div>
        </div>
      </div>

    </form>
<!-- <script>
   // Mendapatkan elemen select
   var select = document.getElementById("mySelect");

// Mendengarkan peristiwa perubahan pada elemen select
select.addEventListener("change", function() {
    // Mendapatkan nilai yang dipilih
    var selectedValue = this.value;

    // Mendapatkan semua opsi dalam elemen select
    var options = this.options;

    // Menonaktifkan atau menyembunyikan opsi yang dipilih
    for (var i = 0; i < options.length; i++) {
        if (options[i].value === selectedValue) {
            options[i].disabled = true;
            // Jika Anda ingin menyembunyikan opsi yang dipilih, gunakan kode berikut ini:
            // options[i].style.display = "none";
        } else {
            options[i].disabled = false;
            // Jika Anda ingin menampilkan kembali opsi yang dipilih jika opsi lain dipilih, gunakan kode berikut ini:
            // options[i].style.display = "block";
        }
    }
   });

</script> -->