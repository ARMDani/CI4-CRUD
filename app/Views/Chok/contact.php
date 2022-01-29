<!-- halaman ini akan menggunakan file template yang ada dihalaman layout -->
<?= $this->extend('layout/template'); ?>



<!-- ini adalah section yang namanya conten -->
<?= $this->section('conten'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1>ini adalah contact</h1>


        </div>
    </div>
</div>
<?= $this->endSection(); ?>