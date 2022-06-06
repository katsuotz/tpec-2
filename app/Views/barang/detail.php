<?= $this->extend('layout/template') ?>
<?= $this->section('title') ?>
Barang
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="/image/<?= $barang['gambar']; ?>" alt="..." width="100" height="100">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $barang['nama_barang']; ?></h5>
                <p class="card-text"><b>Harga: </b><?= $barang['harga']; ?></p>
                <p class="card-text"><small class="text-muted"><b>Deskripsi:</b> <?= $barang['deskripsi']; ?></small></p>

<!--                <p class="card-text"><small class="text-muted"><b>H :</b> --><?//= $artikel['penerbit']; ?><!--</small></p>-->
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
                <br><br>
                <a href="/backend/barang">Kembali ke Halaman Utama</a>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
