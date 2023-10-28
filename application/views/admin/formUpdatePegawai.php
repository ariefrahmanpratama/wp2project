<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="card" style="width: 60%;">
        <div class="card-body">
            <?php foreach($pegawai as $p): ?>
            <form method="post" action="<?= base_url('admin/dataPegawai/updateDataAksi') ?>" enctype="multipart/form-data" >

                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="hidden" name="id_pegawai" id="id_pegawai" class="form-control" value="<?php echo $p->id_pegawai ?>">
                    <input type="number" name="nik" id="nik" class="form-control" value="<?php echo $p->nik ?>">
                    <?= form_error('nik', '<div class="text-small text-danger" >', '</div>') ?>
                </div>
                

                <div class="form-group">
                    <label for="nama_pegawai">Nama Pegawai</label>
                    <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control" value="<?php echo $p->nama_pegawai ?>">
                    <?= form_error('nama_pegawai', '<div class="text-small text-danger" >', '</div>') ?>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"> 
                        <option value="<?php echo $p->jenis_kelamin ?>"><?php echo $p->jenis_kelamin ?></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <?= form_error('jenis_kelamin', '<div class="text-small text-danger" >', '</div>') ?>
                </div>

                <div class="form-group">
                    <label for="jabatan">Pilih Jabatan</label>
                    <select name="jabatan" id="jabatan" class="form-control"> 
                        <option value="<?php echo $p->jabatan ?>"><?php echo $p->jabatan ?></option>
                        <?php foreach($jabatan as $j): ?>
                        <option value="<?= $j->nama_jabatan ?>"><?= $j->nama_jabatan ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('jabatan', '<div class="text-small text-danger" >', '</div>') ?>
                </div>

                <div class="form-group">
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" value="<?php echo $p->tanggal_masuk ?>">
                    <?= form_error('tanggal_masuk', '<div class="text-small text-danger" >', '</div>') ?>
                </div>

                <div class="form-group">
                    <label for="status">Pilih Status</label>
                    <select name="status" id="status" class="form-control"> 
                        <option value="<?php echo $p->status ?>"><?php echo $p->status ?></option>
                        <option value="Pegawai Tetap">Pegawai Tetap</option>
                        <option value="Pegawai Tidak Tetap">Pegawai Tidak Tetap</option>
                    </select>
                    <?= form_error('status', '<div class="text-small text-danger" >', '</div>') ?>
                </div>

                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="photo" class="form-control">
                    <?= form_error('photo', '<div class="text-small text-danger" >', '</div>') ?>
                </div>

                <button type="submit" class="btn btn-primary" >Simpan</button>
            </form>
            <?php endforeach; ?>
        </div>
    </div>

</div>

</div>