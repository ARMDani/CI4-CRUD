<!-- halaman ini akan menggunakan file template yang ada dihalaman layout -->
<?= $this->extend('layout/template'); ?>



<!-- ini adalah section yang namanya conten -->
<?= $this->section('conten'); ?>


<!-- kita buat struktur bootstrepnya seperti container, row, col -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <!-- ini adalah jumbotron -->
            <section class="jumbotron text-center">

                <img src="/img/umk1.jpeg" alt="" class="img-thumbnail">
                <h1 class="display-4">KELOMPOK 3</h1>
                <p class="lead">Buku Merupakan Jendela Dunia.</p>
                <p class="lead">Buku lama adalah buku baru bagi mereka yang belum membacanya..</p>
            </section>

            <!-- ini akhir jumbptro -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>