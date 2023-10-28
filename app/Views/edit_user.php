<?=$this->extend('layouts/app')?>
<?=$this->section('content')?>

    <div class="container" style="background-color: #f0f0f0; padding: 20px; border-radius: 20px; margin-top: 30px;">
        <h2 class="mt-5">Form Data Mahasiswa</h2>
        <form action="<?= base_url('user/' . $user['id']) ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= $user['nama'] ?>">
                <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('nama'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('npm') ? 'is-invalid' : '' ?>" id="npm" name="npm" value="<?= $user['npm'] ?>">
                <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('npm'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <select name="kelas" id="kelas" class="form-control">
                    <?php foreach ($kelas as $item) : ?>
                        <option value="<?= $item['id'] ?>"
                        <?= $user['id_kelas'] ==$item['id']? 'selected' : ''?>>
                        <?= $item['nama_kelas'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <img src="<?= $user['foto']?>" alt="" width="200" height="200">

            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
            
            <?= csrf_field() ?>
            <button type="submit" class="btn btn-primary">Simpan</button>
            
        </form>
    </div>

<?=$this->endSection()?>
