<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Guru</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $guru['gambar']; ?>" class="img-fluid rounded-start" alt="<?= $guru['nama_guru']; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $guru['nama_guru']; ?></h5>
                            <p class="card-text">Alamat: <?= $guru['alamat']; ?></p>
                            <p class="card-text">Nomor Telepon: <?= $guru['no_telepon']; ?></p>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                            <br><br>
                            <a href="/pages/data_guru" class="">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
