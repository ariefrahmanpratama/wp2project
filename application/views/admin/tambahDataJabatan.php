<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="card" style="width: 60%;" > 
        <div class="card-body">
            <form action="<?= base_url('admin/dataJabatan/tambahDataAksi') ?>" method="post">

                <div class="form-group">
                    <label for="nama_jabatan">Nama Jabatan</label>
                    <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control">
                    <?= form_error('nama_jabatan','<div class="text-small text-danger" >','</div>') ?>
                </div>

                <div class="form-group">
                    <label for="gaji_pokok">Gaji Pokok</label>
                    <input type="text" name="gaji_pokok" id="gaji_pokok" class="form-control">
                    <?= form_error('gaji_pokok','<div class="text-small text-danger" >','</div>') ?>
                </div>

                <div class="form-group">
                    <label for="tj_transport">Tunjangan Transport</label>
                    <input type="text" name="tj_transport" id="tj_transport" class="form-control">
                    <?= form_error('tj_transport','<div class="text-small text-danger" >','</div>') ?>
                </div>

                <div class="form-group">
                    <label for="uang_makan">Uang Makan</label>
                    <input type="text" name="uang_makan" id="uang_makan" class="form-control">
                    <?= form_error('uang_makan','<div class="text-small text-danger" >','</div>') ?>
                </div>
                <a class="btn btn-warning" href="<?= base_url('admin/dataJabatan') ?>">Back</a>
                <button type="reset" class="btn btn-danger" >Reset</button>
                <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>

    </div>

</div>

</div>