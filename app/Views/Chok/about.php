<!-- halaman ini akan menggunakan file template yang ada dihalaman layout -->
<?= $this->extend('layout/template'); ?>



<!-- ini adalah section yang namanya conten -->
<?= $this->section('conten'); ?>




<!-- kita buat struktur bootstrepnya seperti container, row, col -->
<section id="about">
    <div class="container">
        <div class="row text-center">
            <div class="col">

                <body>
                    <h2>About Me</h2>
            </div>
        </div>
    </div>
</section>

<!-- kita tutup section nya -->
<?= $this->endSection(); ?>