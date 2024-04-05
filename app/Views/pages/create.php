<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Tambah Data</h2>
            <form class="row g-3" action="/pages/save" method="post">
                <div class="col-md-6">
                    <label for="id_guru" class="form-label">ID Guru</label>
                    <input name="id_guru" type="text" class="form-control" placeholder="ID" aria-label="ID" autofocus>
                </div>
                <div class="col-md-6">
                    <label for="nama_guru" class="form-label">Nama Lengkap</label>
                    <input name="nama_guru" type="text" class="form-control" placeholder="Nama Depan" aria-label="Nama Depan">
                </div>
                <div class="col-12">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
                </div>
                <div class="col-12">
                    <label for="no_telepon" class="form-label">Nomor Telepon</label>
                    <input name="no_telepon" type="text" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Telepon">
                </div>
                <div class="col-12">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input name="gambar" type="text" class="form-control" placeholder="Gambar" aria-label="Gambar">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
