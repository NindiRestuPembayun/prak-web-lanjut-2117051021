<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container">
        <h3 class='text-center py-3'>Tabel Mahasiswa</h3>
        <a href="<?= base_url('user/create') ?>">Tambah data</a>

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
                    <a href="<?= base_url('user/' . $user['id']) ?>">Detail</a>
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
<?= $this->endSection() ?>







