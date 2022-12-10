<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Ubah Guru</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="?page=guru" class="btn btn-sm btn-outline-dark">
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
                        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM guru WHERE id = $id"));

                    ?>

                    <form action="./process/guru/ubah.php" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">

                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label text-muted">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $rows['nama_lengkap']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="alamat_email" class="form-label text-muted">Alamat Email</label>
                            <input type="text" class="form-control" id="alamat_email" name="alamat_email" value="<?php echo $rows['alamat_email']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="nomor_hp" class="form-label text-muted">Nomor HP</label>
                            <input type="text" class="form-control" id="nomor_hp" name="nomor_hp"  value="<?php echo $rows['nomor_hp']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="alamat_lengkap" class="form-label text-muted">Alamat Lengkap</label>
                            <textarea name="alamat_lengkap" id="alamat_lengkap" cols="30" rows="5" class="form-control"><?php echo $rows['alamat_lengkap']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <div class="mb-3">
                                <img src="./images/guru/<?php if(!empty($rows['foto'])){ echo $rows['foto']; } else { echo "no-image.png"; } ?>" alt="Gambar" class="img img-thumbnail" width="100px">
                            </div>
                            <label for="file" class="form-label text-muted">Gambar</label>
                            <input type="file" name="file" class="form-control">
                            
                        </div>

                        <div class="py-2">
                            <hr>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">
                                <span data-feather="save" class="align-text"></span>
                                Simpan
                            </button>
                            <a href="?page=guru" class="btn btn-outline-dark">
                                <span data-feather="x" class="align-text"></span>
                                Batal</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</main>
