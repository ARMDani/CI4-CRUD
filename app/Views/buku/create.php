<?= $this->extend('layout/template'); ?>
<?= $this->section('conten'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Buku</h2>
            <form action="/buku/save" method="post">
                <!-- fungsi csrf (Cross-site Request Forgery) ini untuk menjaga agar form nya hnaya bisa diisi dihalaman ini saja -->
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" aria-describedby="emailHelp" name="judul" autofocus value="<?= old('judul'); ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                </div>
                <div class="form-group">
                    <label for="sampul">Sampul</label>
                    <input type="text" class="form-control" id="sampul" name="sampul" value="<?= old('sampul'); ?>">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>



<?= $this->endSection(); ?>