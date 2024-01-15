<div class="col-6 text-reight" style="margin-left:275px; width:350px; height:250px;">
    <?= $this->session->flashdata('pesan') ?>
    <?= form_open('location/edit/'. $isidata->id_location) ?>
    <div class="card card-success">

        <div class="card-header">
            <h3 class="card-title" style="margin-left:70px;"><?= $judul?></h3>
        </div>
            <div class="card-body">
                <label>Id Location</label>
            <input class="form-control form-control-sm" type="text" name="idLok" value="<?= $isidata->id_location?>" autocomplete="off">
            <label>Nama Lokasi</label>
            <input class="form-control form-control-sm" type="text" name="lokas" value="<?= $isidata->name_location?>" autocomplete="off">
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="margin-left:90px;" name="ubah">Ubah</button>
            </div>
    </div>  
<?= form_close()?>
</div>
