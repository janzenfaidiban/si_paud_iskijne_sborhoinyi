<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Ubah Siswa</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="?page=siswa" class="btn btn-sm btn-outline-dark">
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
                        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM siswa WHERE id = $id"));

                    ?>

                    <form action="./process/siswa/ubah.php" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">

                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label text-muted">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $rows['nama_lengkap']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="nim" class="form-label text-muted">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $rows['nim']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="tmp_tgl_lahir" class="form-label text-muted">Tempat, Tanggal Lahir</label>
                            <input type="text" class="form-control" id="tmp_tgl_lahir" name="tmp_tgl_lahir"  value="<?php echo $rows['tmp_tgl_lahir']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label text-muted">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                <option value="" <?php echo $rows['tmp_tgl_lahir'] ? 'selected' : ''; ?>></option>
                                <option value="Laki-Laki" <?php if(!empty($rows['jenis_kelamin']) && $rows['jenis_kelamin'] == 'Laki-Laki'){echo 'selected';} ?>>Laki-Laki</option>
                                <option value="Perempuan" <?php if(!empty($rows['jenis_kelamin']) && $rows['jenis_kelamin'] == 'Perempuan'){echo 'selected';} ?>>Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <div class="mb-3">
                                <img src="./images/siswa/<?php if(!empty($rows['foto'])){ echo $rows['foto']; } else { echo "no-image.png"; } ?>" alt="Gambar" class="img img-thumbnail" width="100px">
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
                            <a href="?page=siswa" class="btn btn-outline-dark">
                                <span data-feather="x" class="align-text"></span>
                                Batal</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</main>
