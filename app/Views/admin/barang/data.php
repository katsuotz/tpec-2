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
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang</th>
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
                            <th scope="row"><?= $key+1 ?></th>
                            <td><?= $barang['nama_barang'] ?></td>
                            <td><?= $barang['harga'] ?></td>
                            <td><?= $barang['warna'] ?></td>
                            <td><?= $barang['ukuran'] ?></td>
                            <td><?= $barang['deskripsi'] ?></td>
                            <td><?= $barang['created_at'] ?></td>
<!--                            <td><div class="badge badge-success">Active</div></td>-->
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
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
