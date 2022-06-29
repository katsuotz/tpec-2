<?= $this->extend('admin/template') ?>
<?= $this->section('title') ?>
<title>Barang</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h2><?= @$barang ? 'Form Ubah Data Barang' : 'Form Tambah Data Barang' ?></h2>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/backend/barang<?= @$barang ? '/update/' . $barang['id'] : '' ?>">
                    <?= csrf_field() ?>
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" value="<?= old('nama', @$barang['nama_barang']) ?>" id="nama" name="nama" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Harga Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" value="<?= old('harga', @$barang['harga']) ?>" id="harga" name="harga">
                            <div class="invalid-feedback">
                                <?= $validation->getError('harga') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="warna" class="col-sm-2 col-form-label">Warna Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('warna')) ? 'is-invalid' : ''; ?>" value="<?= old('warna', @$barang['warna']) ?>" id="warna" name="warna">
                            <div class="invalid-feedback">
                                <?= $validation->getError('warna') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ukuran" class="col-sm-2 col-form-label">Ukuran Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('ukuran')) ? 'is-invalid' : ''; ?>" value="<?= old('ukuran', @$barang['ukuran']) ?>" id="ukuran" name="ukuran">
                            <div class="invalid-feedback">
                                <?= $validation->getError('ukuran') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" value="<?= old('deskripsi', @$barang['deskripsi']) ?>" id="deskripsi" name="deskripsi">
                            <div class="invalid-feedback">
                                <?= $validation->getError('deskripsi') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="gambar" class="col-sm-2 col-form-label">Gambar Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" value="<?= old('gambar', @$barang['gambar']) ?>" id="gambar" name="gambar">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar') ?>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary"><?= @$barang ? 'Ubah Data' : 'Tambah Data' ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
