<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>
    <?= $this->session->flashdata('upload_error') ?>
    <div class="card" style="width: 60%;">
        <div class="card-body">
            <?php foreach ($pegawai as $p) : ?>
                <form method="post" action="<?= base_url('admin/dataPegawai/updateDataAksi') ?>" enctype="multipart/form-data">

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
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?php echo $p->username ?>">
                        <?= form_error('username', '<div class="text-small text-danger" >', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control" aria-describedby="passwordToggle">
                            <div class="input-group-append">
                                <button type="button" id="passwordToggle" class="btn btn-outline-primary" onclick="togglePassword()">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        <?= form_error('password', '<div class="text-small text-danger" >', '</div>') ?>
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
                            <?php foreach ($jabatan as $j) : ?>
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

                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select name="hak_akses" class="form-control">
                            <option value="<?php echo $p->hak_akses ?>">
                                <?php if ($p->hak_akses == "1") {
                                    echo "Admin";
                                } else {
                                    echo "pegawai";
                                } ?>
                            </option>
                            <option value="1">Admin</option>
                            <option value="2">Pegawai</option>
                        </select>
                        <?= form_error('hak_akses', '<div class="text-small text-danger" >', '</div>') ?>
                    </div>

                    <a class="btn btn-warning" href="<?= base_url('admin/dataPegawai') ?>">Back</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>

                </form>

            <?php endforeach; ?>
        </div>
                                
    </div>
<br>
</div>
</div>
