<?=$this->extend('layouts/app')?>
<?=$this->section('content')?>

    <div class="container" style="background-color: #f0f0f0; padding: 20px; border-radius: 20px; margin-top: 50px;">
        <h2 class="mt-5">Form Data Kelas</h2>
        <form action="<?= base_url('kelas/store') ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama Kelas</label>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= old('nama') ?>">
                <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('nama'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <input type="submit" class="btn btn-primary">
        </form>
    </div>

<?=$this->endSection()?>
