<?=$this->extend('layouts/app')?>
<?=$this->section('content')?>
</head>
<body>
<div class="container">
    <div class="card" data-tilt>
        <img src="<?php echo base_url('profilwl.jpeg'); ?>" class="rounded-img" width="150px">
        <h2>Profile</h2>
        <table class="profile-info">
            <tr>
                <td>Nama:</td>
                <td><?=$nama?></td>
            </tr>
            <tr>
                <td>Kelas:</td>
                <td><?=$kelas?></td>
            </tr>
            <tr>
                <td>NPM:</td>
                <td><?=$npm?></td>
            </tr>
        </table>
    </div>
</div>
</body>
<?=$this->endSection()?>
