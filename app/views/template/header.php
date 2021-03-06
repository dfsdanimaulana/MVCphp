<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <title>Halaman <?= $data['judul'] ?></title>
</head>

<body>
    <nav class="navbar navbar-dark bg-danger bg-gradient mb-3">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">MY WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                    <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                    <a class="nav-link" href="<?= BASEURL; ?>/daftar">Daftar</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">