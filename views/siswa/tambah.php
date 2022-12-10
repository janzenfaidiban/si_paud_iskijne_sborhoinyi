<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Tambah Siswa</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="?page=siswa" class="btn btn-sm btn-outline-dark">
                <span data-feather="arrow-left" class="align-text"></span> Kembali
            </a>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">

                    <form action="./process/siswa/tambah.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label text-muted">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap...">
                        </div>

                        <div class="mb-3">
                            <label for="nim" class="form-label text-muted">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM...">
                        </div>

                        <div class="mb-3">
                            <label for="tmp_tgl_lahir" class="form-label text-muted">Tempat, Tanggal Lahir</label>
                            <input type="text" class="form-control" id="tmp_tgl_lahir" name="tmp_tgl_lahir" placeholder="Tempat, Tanggal Lahir...">
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label text-muted">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                <option value="" selected></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <div class="mb-3">
                                <img src="./images/siswa/no-image.png" alt="Gambar" class="img img-thumbnail" width="100px">
                            </div>
                            <label for="file" class="form-label text-muted">Gambar</label>
                            <input type="file" name="file" class="form-control">
                            
                        </div>

                        <div class="py-2">
                            <hr>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">
                                <span data-feather="plus-square" class="align-text"></span>
                                Tambah
                            </button>
                            <a href="?page=siswa" class="btn btn-outline-dark">
                                <span data-feather="x-square" class="align-text"></span>
                                Batal</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</main>
