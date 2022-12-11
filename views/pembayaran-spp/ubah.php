<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Ubah Pembayaran SPP</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="?page=pembayaran-spp" class="btn btn-sm btn-outline-dark">
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
                        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pembayaran_spp WHERE id = $id"));

                    ?>

                    <form action="./process/pembayaran-spp/ubah.php" method="post">

                        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">

                        <div class="mb-3">
                            <label for="bulan" class="form-label text-muted">Bulan</label>
                            <select name="bulan" id="bulan" class="form-select">
                                <option value="Januari" <?php if($rows['bulan'] == 'Januari'){echo "selected";} ?>>Januari</option>
                                <option value="Februari" <?php if($rows['bulan'] == 'Februari'){echo "selected";} ?>>Februari</option>
                                <option value="Maret" <?php if($rows['bulan'] == 'Maret'){echo "selected";} ?>>Maret</option>
                                <option value="April" <?php if($rows['bulan'] == 'April'){echo "selected";} ?>>April</option>
                                <option value="Mei" <?php if($rows['bulan'] == 'Mei'){echo "selected";} ?>>Mei</option>
                                <option value="Juni" <?php if($rows['bulan'] == 'Juni'){echo "selected";} ?>>Juni</option>
                                <option value="Juli" <?php if($rows['bulan'] == 'Juli'){echo "selected";} ?>>Juli</option>
                                <option value="Agustus" <?php if($rows['bulan'] == 'Agustus'){echo "selected";} ?>>Agustus</option>
                                <option value="September" <?php if($rows['bulan'] == 'September'){echo "selected";} ?>>September</option>
                                <option value="Oktober" <?php if($rows['bulan'] == 'Oktober'){echo "selected";} ?>>Oktober</option>
                                <option value="November" <?php if($rows['bulan'] == 'November'){echo "selected";} ?>>November</option>
                                <option value="Desember" <?php if($rows['bulan'] == 'Desember'){echo "selected";} ?>>Desember</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="iuran" class="form-label text-muted">Iuran</label>
                            <textarea id="iuran" cols="30" rows="5" class="form-control" name="iuran" placeholder="Iuran..."><?php echo $rows['iuran']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_pembayaran" class="form-label text-muted">Tanggal Pembayaran</label>
                            <input type="date" class="form-control" id="tanggal_pembayaran" name="tanggal_pembayaran" value="<?php echo $rows['tanggal_pembayaran']; ?>">
                        </div>

                        <div class="py-2">
                            <hr>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">
                                <span data-feather="save" class="align-text"></span>
                                Simpan
                            </button>
                            <a href="?page=pembayaran-spp" class="btn btn-outline-dark">
                                <span data-feather="x" class="align-text"></span>
                                Batal</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</main>
