<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Tambah Surat Masuk</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="?page=surat-masuk" class="btn btn-sm btn-outline-dark">
                <span data-feather="arrow-left" class="align-text"></span> Kembali
            </a>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">

                    <form action="./process/surat-masuk/tambah.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="jenis_surat" class="form-label text-muted">Jenis Surat</label>
                            <input type="text" disabled class="form-control" id="jenis_surat" name="jenis_surat" value="Masuk" placeholder="Tanggal Diterima...">
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_diterima" class="form-label text-muted">Tanggal Diterima</label>
                            <input type="date" class="form-control" id="tanggal_diterima" name="tanggal_diterima" placeholder="Tanggal Diterima...">
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_surat" class="form-label text-muted">Tanggal Surat</label>
                            <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" placeholder="Tanggal Surat...">
                        </div>

                        <div class="mb-3">
                            <label for="nomor_surat" class="form-label text-muted">Nomor Surat</label>
                            <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" placeholder="Nomor Surat...">
                        </div>

                        <div class="mb-3">
                            <label for="pengirim" class="form-label text-muted">Pengirim</label>
                            <input type="text" class="form-control" id="pengirim" name="pengirim" placeholder="Pengirim...">
                        </div>
        
                        <div class="mb-3">
                            <label for="file" class="form-label text-muted">Unggah Surat (*.PDF)</label>
                            <input type="file" id="file" name="file" class="form-control">
                        </div>

                        <div class="py-2">
                            <hr>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">
                                <span data-feather="plus-square" class="align-text"></span>
                                Tambah
                            </button>
                            <a href="?page=surat-masuk" class="btn btn-outline-dark">
                                <span data-feather="x-square" class="align-text"></span>
                                Batal</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</main>
