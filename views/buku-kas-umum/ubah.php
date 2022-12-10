<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
        <h1 class="h2 fw-bold">Ubah Buku Kas Umum</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="?page=buku-kas-umum" class="btn btn-sm btn-outline-dark">
                <span data-feather="arrow-left" class="align-text"></span> Kembali
            </a>
        </div>
        
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">

                    <?php 

                        include __DIR__ . '../../../config/database.php';   
                        $id = $_GET['id'];
                        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM buku_kas_umum WHERE id = $id"));

                    ?>

                    <form action="./process/buku-kas-umum/ubah.php" method="post">

                        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">

                        <div class="mb-3">
                            <label for="tanggal" class="form-label text-muted">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $rows['tanggal']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="uraian" class="form-label text-muted">Uraian</label>
                            <textarea name="uraian" id="uraian" class="form-control" cols="30" rows="10"><?php echo $rows['uraian']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="penerimaan" class="form-label text-muted">Penerimaan</label>
                            <input type="text" class="form-control" id="penerimaan" name="penerimaan" value="<?php echo $rows['penerimaan']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="pengeluaran" class="form-label text-muted">Pengeluaran</label>
                            <input type="text" class="form-control" id="pengeluaran" name="pengeluaran" value="<?php echo $rows['pengeluaran']; ?>">
                        </div>

                        <div class="py-2">
                            <hr>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">
                                <span data-feather="save" class="align-text"></span>
                                Simpan
                            </button>
                            <a href="?page=buku-kas-umum" class="btn btn-outline-dark">
                                <span data-feather="x" class="align-text"></span>
                                Batal</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</main>
