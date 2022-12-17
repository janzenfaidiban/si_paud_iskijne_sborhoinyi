<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dasbor</h1>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">                            
                            <p>Selamat Datang, <b><?=$_SESSION['username']?></b>!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        include __DIR__ . '../../../config/database.php';   

        // guru
        $query_guru = mysqli_query($conn, "SELECT * FROM guru");
        $total_guru = mysqli_num_rows($query_guru);

        // guru
        $query_siswa = mysqli_query($conn, "SELECT * FROM siswa");
        $total_siswa = mysqli_num_rows($query_siswa);

        //sarpras
        $query_sarpras = mysqli_query($conn, "SELECT * FROM sarpras");
        $total_sarpras = mysqli_num_rows($query_sarpras);

        //surat_masuk
        $query_surat_masuk = mysqli_query($conn, "SELECT * FROM surat WHERE jenis_surat = 'Masuk'");
        $total_surat_masuk = mysqli_num_rows($query_surat_masuk);

        //surat_keluar
        $query_surat_keluar = mysqli_query($conn, "SELECT * FROM surat WHERE jenis_surat = 'Keluar'");
        $total_surat_keluar = mysqli_num_rows($query_surat_keluar);

        //pembayaran_spp
        $query_pembayaran_spp = mysqli_query($conn, "SELECT * FROM pembayaran_spp");
        $total_pembayaran_spp = mysqli_num_rows($query_pembayaran_spp);

        //buku_kas_umum
        $query_buku_kas_umum = mysqli_query($conn, "SELECT * FROM buku_kas_umum");
        $total_buku_kas_umum = mysqli_num_rows($query_buku_kas_umum);

    ?>

    <div class="row">
        <!-- total guru start-->
        <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
            <a href="#" class="link-dark text-decoration-none" title="Tampilkan data guru">
                <div class="card">
                    <div class="card-body text-center">
                        <b class="display-1 fw-bold"><?=$total_guru?></b> 
                        <p class="fw-bold">Total Guru</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- total guru end -->
        <!-- total guru start-->
        <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
            <a href="#" class="link-dark text-decoration-none" title="Tampilkan data guru">
                <div class="card">
                    <div class="card-body text-center">
                        <b class="display-1 fw-bold"><?=$total_siswa?></b> 
                        <p class="fw-bold">Total Siswa</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- total guru end -->
        <!-- total sarpras start-->
        <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
            <a href="#" class="link-dark text-decoration-none" title="Tampilkan data sarpras">
                <div class="card">
                    <div class="card-body text-center">
                        <b class="display-1 fw-bold"><?=$total_sarpras?></b> 
                        <p class="fw-bold">Total Sarpras</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- total sarpras end -->
        <!-- total surat masuk start-->
        <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
            <a href="#" class="link-dark text-decoration-none" title="Tampilkan data surat masuk">
                <div class="card">
                    <div class="card-body text-center">
                        <b class="display-1 fw-bold"><?=$total_surat_masuk?></b> 
                        <p class="fw-bold">Total Surat Masuk</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- total surat masuk end -->
        <!-- total surat keluar start-->
        <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
            <a href="#" class="link-dark text-decoration-none" title="Tampilkan data surat keluar">
                <div class="card">
                    <div class="card-body text-center">
                        <b class="display-1 fw-bold"><?=$total_surat_keluar?></b> 
                        <p class="fw-bold">Total Surat Keluar</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- total surat keluar end -->
        <!-- total buku kas umum start-->
        <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
            <a href="#" class="link-dark text-decoration-none" title="Tampilkan data buku kas umum">
                <div class="card">
                    <div class="card-body text-center">
                        <b class="display-1 fw-bold"><?=$total_buku_kas_umum?></b> 
                        <p class="fw-bold">Total Buku Kas Umum</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- total buku kas umum end -->
    </div>

</main>