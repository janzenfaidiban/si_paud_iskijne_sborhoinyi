<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Ubah Surat Masuk</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="?page=surat-masuk" class="btn btn-sm btn-outline-dark">
                <span data-feather="arrow-left" class="align-text"></span> Kembali
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">

                    <?php 

                        include __DIR__ . '../../../config/database.php';   
                        $id = $_GET['id'];
                        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM surat WHERE id = $id"));

                    ?>

                    <form action="./process/surat-masuk/ubah.php" method="post">
                        

                        <div class="row">

                            <div class="col-lg-4">

                                <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">

                                <div class="mb-3">
                                    <label for="jenis_surat" class="form-label text-muted">Jenis Surat</label>
                                    <input type="text" disabled class="form-control" id="jenis_surat" name="jenis_surat" value="Masuk" value="<?php echo $rows['jenis_surat']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="tanggal_diterima" class="form-label text-muted">Tanggal Diterima</label>
                                    <input type="date" class="form-control" id="tanggal_diterima" name="tanggal_diterima" value="<?php echo $rows['tanggal_diterima']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="tanggal_surat" class="form-label text-muted">Tanggal Surat</label>
                                    <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" value="<?php echo $rows['tanggal_surat']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="nomor_surat" class="form-label text-muted">Nomor Surat</label>
                                    <input type="text" class="form-control" id="nomor_surat" name="nomor_surat"value="<?php echo $rows['nomor_surat']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="pengirim" class="form-label text-muted">Pengirim</label>
                                    <input type="text" class="form-control" id="pengirim" name="pengirim" value="<?php echo $rows['pengirim']; ?>">
                                </div>
        
                                <div class="mb-3">
                                    <label for="file" class="form-label text-muted">Unggah Surat BARU (*.PDF)</label>
                                    <input type="file" id="file" class="form-control">
                                    <small class="text-danger">* Pilih file baru jika ingin ganti surat</small>
                                </div>

                            </div>

                            <div class="col-lg-8">                                    
                        
                                <iframe src="./assets/surat/masuk/contoh-surat.pdf" width="100%" height="1000px">
                                </iframe>

                            </div>

                        </div>

                        <div class="py-2">
                            <hr>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">
                                <span data-feather="save" class="align-text"></span>
                                Simpan
                            </button>
                            <a href="?page=surat-masuk" class="btn btn-outline-dark">
                                <span data-feather="x" class="align-text"></span>
                                Batal</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</main>
