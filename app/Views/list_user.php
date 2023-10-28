<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container">
        <h3 class='text-center py-3'>Tabel Mahasiswa</h3>
        <a href="<?= base_url('user/create') ?>" style="background-color: #808080; color: white; border-radius: 20px" class="btn btn-primary">Tambah data</a>

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
                    <a href="<?= base_url('user/' . $user['id']) ?>" class="btn btn-info">Detail</a>
                    <a href="<?= base_url('user/' .$user['id'] . '/edit') ?>" class="btn btn-warning">Edit</a>
                    
                    <form action="<?= base_url('user/' . $user['id'])?>" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <?= csrf_field() ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form> 
                    </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>

</div>
<?= $this->endSection() ?>







