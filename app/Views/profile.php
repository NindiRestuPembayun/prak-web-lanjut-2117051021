<?=$this->extend('layouts/app')?>
<?=$this->section('content')?>
</head>
<body style="background-color: #F8F8FF;">
<div class="container">
    <div class="card" data-tilt style="background-color: #D5D5D5; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
        <img src="<?=$user['foto']?>" class="rounded-img" width="150px">
        <h2>Profile</h2>
        <table class="profile-info">
            <tr>
                <td>Nama:</td>
                <td><?=$user['nama']?></td>
            </tr>
            <tr>
                <td>Kelas:</td>
                <td><?=$user['nama_kelas']?></td>
            </tr>
            <tr>
                <td>NPM:</td>
                <td><?=$user['npm']?></td>

            </tr>
        </table>
    </div>
</div>
</body>
<?=$this->endSection()?>
