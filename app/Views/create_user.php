<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Form Data Mahasiswa</h2>
    
        <form action="<?= base_url('user/store') ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama" value=<?= old('nama')?>>
                <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
           <div class="invalid-feedback">
            <?= session('validation')->getError('nama'); ?>
           </div>
               <?php endif; ?>
            </div>


            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('npm') ? 'is-invalid' : '' ?>" id="npm" name="npm" value=<?= old('npm')?>>
                <div class="invalid-feedback">
                <?php if (session('validation') && session('validation')->hasError('npm')) : ?>

                <?= session('validation')->getError('npm'); ?>
                </div>
               <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <select name="kelas" id="kelas">
                    <?php foreach($kelas as $item):?>
                        <option value="<?=$item['id']?>"><?=$item['nama_kelas']?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
