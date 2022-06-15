<?= $this->extend('admin/template') ?>
<?= $this->section('title') ?>
<title>Barang</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h2> Form Tambah Data Barang</h2>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/backend/barang">
                    <?= csrf_field() ?>
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Harga Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="warna" class="col-sm-2 col-form-label">Warna Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="warna" name="warna">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ukuran" class="col-sm-2 col-form-label">Ukuran Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukuran" name="ukuran">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="gambar" class="col-sm-2 col-form-label">Gambar Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="gambar" name="gambar">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
