<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Ubah Sarpras</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="?page=sarpras" class="btn btn-sm btn-outline-dark">
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
                        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM sarpras WHERE id = $id"));

                    ?>

                    <form action="./process/sarpras/ubah.php" method="post">

                        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">

                        <div class="mb-3">
                            <label for="nama_barang" class="form-label text-muted">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $rows['nama_barang']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label text-muted">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $rows['jumlah']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="kondisi_baik" class="form-label text-muted">Kondisi Baik</label>
                            <input type="text" class="form-control" id="kondisi_baik" name="kondisi_baik"  value="<?php echo $rows['kondisi_baik']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="kondisi_tidak_baik" class="form-label text-muted">Kondisi Tidak Baik</label>
                            <input type="text" class="form-control" id="kondisi_tidak_baik" name="kondisi_tidak_baik"  value="<?php echo $rows['kondisi_tidak_baik']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="letak_barang" class="form-label text-muted">Letak Barang</label>
                            <input type="text" class="form-control" id="letak_barang" name="letak_barang"  value="<?php echo $rows['letak_barang']; ?>">
                        </div>

                        <div class="py-2">
                            <hr>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">
                                <span data-feather="save" class="align-text"></span>
                                Simpan
                            </button>
                            <a href="?page=sarpras" class="btn btn-outline-dark">
                                <span data-feather="x" class="align-text"></span>
                                Batal</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</main>
