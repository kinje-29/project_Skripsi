<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/pages/create" class="btn btn-primary mt-3">Tambah Data</a>
            <h1 class="mt-2">Data Guru</h1>
            <?php if(session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-primary" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">ID Guru</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $start = isset($_GET['start']) ? (int)$_GET['start'] : 0; 
                        $end = min(count($guru), $start + 5);
                        ?>
                        <?php for ($i = $start; $i < $end; $i++) : ?>
                            <tr>
                                <td><?= $i + 1; ?></td>
                                <td><img src="/img/<?= $guru[$i]['gambar']; ?>" alt="" class="gambar"></td>
                                <td><?= $guru[$i]['id_guru']; ?></td>
                                <td><?= $guru[$i]['nama_guru']; ?></td>
                                <td><?= $guru[$i]['alamat']; ?></td>
                                <td><?= $guru[$i]['no_telepon']; ?></td>
                                <td>
                                    <a href="<?= $guru[$i]['id_guru']; ?>" class="btn btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            <div class="text">
                <?php if ($start > 0) : ?>
                    <a href="/pages/data_guru?start=<?= max(0, $start - 5); ?>" class="btn btn-primary">Previous</a>
                <?php endif; ?>
                <?php if (count($guru) > $start + 5) : ?>
                    <a href="/pages/data_guru?start=<?= $start + 5; ?>" class="btn btn-primary">Next</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
