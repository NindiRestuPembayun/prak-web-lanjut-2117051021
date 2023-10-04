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
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?=$this->renderSection('content')?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>