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

                <!--                <p class="card-text"><small class="text-muted"><b>H :</b> --><? //= $artikel['penerbit']; ?><!--</small></p>-->
                <div class="d-flex">
                    <a href="/backend/barang/<?= $barang['slug'] ?>/edit" class="btn btn-warning" style="margin-right: .5rem">Edit</a>
                    <form method="POST" action="/backend/barang/delete/<?= $barang['id'] ?>">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah data ingin dihapus?')">Delete</button>
                    </form>
                </div>
                <br><br>
                <a href="/backend/barang">Kembali ke Halaman Utama</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
