<?=$this->extend('layouts/app')?>
<?=$this->section('content')?>

    <div class="container" style="background-color: #f0f0f0; padding: 20px; border-radius: 20px; margin-top: 50px;">
        <h2 class="mt-5">Form Data Mahasiswa</h2>
        <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="POST">
        <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= $kelas['nama_kelas'] ?>">
                <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('nama'); ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <?= csrf_field() ?>
            <button type="submit" class="btn btn-primary">Simpan</button>
            
        </form>
    </div>

<?=$this->endSection()?>
