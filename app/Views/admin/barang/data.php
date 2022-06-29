<?= $this->extend('admin/template') ?>
<?= $this->section('title') ?>
<title>Barang</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Data Barang</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">

                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>


                <a href="/backend/barang/tambah" class="btn btn-primary mb-3">Tambah Data Barang</a>

                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Warna</th>
                            <th scope="col">Ukuran</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data as $key => $barang): ?>
                            <tr>
                                <th scope="row"><?= $key + 1 ?></th>
                                <td><?= $barang['nama_barang'] ?></td>
                                <td><img src="<?= base_url('/image/' . $barang['gambar']) ?>" alt="" style="width: 150px"></td>
                                <td><?= $barang['harga'] ?></td>
                                <td><?= $barang['warna'] ?></td>
                                <td><?= $barang['ukuran'] ?></td>
                                <td><?= $barang['deskripsi'] ?></td>
                                <td><?= $barang['created_at'] ?></td>
                                <!--                            <td><div class="badge badge-success">Active</div></td>-->
                                <td>
                                    <div class="d-flex">
                                        <a href="<?= base_url('/') ?>/barang/<?= $barang['slug']; ?>" class="btn btn-warning" style="margin-right: .25rem"> <i class="fas fa-pencil-alt"></i></a>
                                        <form method="POST" action="/backend/barang/delete/<?= $barang['id'] ?>">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" style="margin-right: .25rem" onclick="return confirm('Apakah data ingin dihapus?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        <a href="#" class="btn btn-primary">Detail</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
