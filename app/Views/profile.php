<!DOCTYPE html>
<html>
<head>
<style>
    body {
        background-color: #CCCC99; 
    }

    .rounded-img {
        border-radius: 50%;
        /* width: 200px;
        height: 200px; */
        display: block;
        margin: 0 auto; 
    }
    .center-text {
        text-align: center;
    }

    .profile-info {
        margin-top: 10px;
        text-align: center;
    }

    .card {
        text-align: center;
        border: 5px solid #ccc;
        padding: 20px;
        max-width: 300px;
        margin: 100px auto; 
        background-color: #FFEBEB; 
    }
</style>
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
</html>
