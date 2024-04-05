<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <title><?= $title ?>  </title>
</head>
  <body>
  <nav class="navbar  navbar-expand-lg " style="background-color: #e3f2fd;">
        <div class="container">
        <a class="navbar-brand" href="#">SMPN 2 Teluk Jambe Barat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link" href="/">Home</a>           
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Admin
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/pages/data_guru">Data Guru</a></li>
                    <li><a class="dropdown-item" href="/pages/mata_pelajaran">Mata Pelajaran</a></li>
                    <li><a class="dropdown-item" href="/pages/jadwal_hari">Jam dan Hari</a></li>
                    <li><a class="dropdown-item" href="/pages/kelas">Data Kelas</a></li>
                    <li><a class="dropdown-item" href="/pages/data_ruangan">Data Ruangan</a></li>
                </ul>
                </li>
                <a class="nav-link" href="">Jadwal Mata Pelajaran</a>
                <a class="nav-link" href="#">Login</a>
            </div>
            </div>
        </div>
    </nav>
    
    <?= $this->renderSection('content'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>