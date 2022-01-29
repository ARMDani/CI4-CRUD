<?= $this->extend('layout/template'); ?>
<?= $this->section('conten'); ?>

<div class="container">
    <div class="row">
        <div class="col">

            <body>
                <h1 class="mt-2">Daftar Buku</h1>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-primary" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <div class="right">
                    <a href="/buku/create" class="btn btn-primary" mt-3>Tambah Data Buku</a>
                </div>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sampul</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($buku as $d) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><img src="/img/<?= $d['sampul']; ?>" alt="" class="sampulbuku1"></td>
                                <td><?= $d['judul']; ?></td>
                                <td>
                                    <a href="/buku/<?= $d['slug']; ?>" class="btn btn-success">Detail</a>
                                </td>
                            </tr>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>