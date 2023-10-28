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
        nav {
        background-color: #D5D5D5; 
        color: #000000;
        text-align: right; 
    }
    .navbar-nav a {
        color: #000000; 
        font-family: 'Poppins', sans-serif; 
    }
</style>
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-link active" aria-current="page" href="<?=base_url('/user')?>">User</a>
        <a class="nav-link" href="<?=base_url('/kelas')?>">Kelas</a>
      </div>
    </div>
  </div>
</nav>
    <?=$this->renderSection('content')?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>