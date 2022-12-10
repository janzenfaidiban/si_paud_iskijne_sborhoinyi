<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./assets/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="./assets/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="./assets/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="./assets/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="./assets/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="./assets/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="./assets/css/login.css" rel="stylesheet">
</head>

<body class="text-center">

    <!-- header start -->
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="./assets/img/logo-paud-transparent.png" alt="Logo PAUD" width="100">
            </a>

            <div class="col-lg-6">
                <h1 class="fs-3">Sistem Informasi PAUD I.S Kijne Sborhoinyi.</h1>
                <ul class="nav mb-2 justify-content-center mb-md-0">
                    <li><a href="./welcome.php" class="nav-link px-2 link-secondary">Beranda</a></li>
                    <li><a href="./tentang-kami.php" class="nav-link px-2 link-dark">Tentang Kami</a></li>
                    <li><a href="./guru.php" class="nav-link px-2 link-dark">Para Guru</a></li>
                    <li><a href="./galeri.php" class="nav-link px-2 link-dark">Galeri Kegiatan</a></li>
                    <li><a href="./hubungi.php" class="nav-link px-2 link-dark">Hubungi Kami</a></li>
                </ul>
            </div>            

            <div class="col-md-3 text-end">
                <a href="./login.php" class="btn btn-primary">Login</a>
            </div>
        </header>
    </div>
    <!-- header end -->

    <!-- content start -->
    <div class="container py-5">
        <main class="col-lg-6 mx-auto">
            <h1 class="fw-bold mb-5">Para Guru</h1>
            <p class="text-muted mb-4">Berikut kami perkenalkan guru-guru kami yang senang dan bersemangat dalam mendukung perkembangan pendidikan usia dini.</p>

            <div class="row">

            
                <?php 
                    include __DIR__ . './config/database.php';   

                    $rows = mysqli_query($conn, "SELECT * FROM guru ORDER BY id DESC");
                ?>
                <?php foreach ($rows as $row) : ?>
                
                <div class="col-lg-4 mb-lg-4">
                    <div class="card pt-4 shadow">
                    <img src="./images/guru/<?php echo $row["foto"] ? $row["foto"] : 'no-image.png';  ?>" alt="Foto Guru" class="card-image-top">
                        <div class="card-body">
                            <p class="fw-bold"><?php echo $row["nama_lengkap"];  ?></p>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
                
            </div>

        </main>
    </div>
    <!-- content end -->

    <footer class="my-5 py-5 bg-light">
        <small class="text-muted">
            Copyright &copy; 2022 - <b>Sistem Informasi PAUD I.S Kijne Sborhoinyi</b>
        </small>
    </footer>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>

</body>

</html>