<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">

        <h3 class='text-center py-3'>Tabel Mahasiswa</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($users as $user){
            ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="">Edit</a>
                        <a class="btn btn-danger" href="">Hapus</a>
                    </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>







