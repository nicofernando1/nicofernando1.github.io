<div class="col-6 text-reight" style="margin-left:275px; width:350px; height:250px;">
<?= form_open('location/addLoc')?>
    <div class="card card-success">

        <div class="card-header">
            <h3 class="card-title" style="margin-left:70px;">Tambahkan Lokasi</h3>
        </div>
            <div class="card-body">
                <label>Id Location</label>
            <input class="form-control form-control-sm" type="text" name="idLok" placeholder=" Hanya angka">
            <label>Nama Lokasi</label>
            <input class="form-control form-control-sm" type="text" name="lokas" placeholder="Masukkan Lokasi">
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="margin-left:90px;" name="kirim">Submit</button>
            </div>
    </div>  
<?= form_close()?>
</div>
