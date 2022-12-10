<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Tambah Sarpras</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="?page=sarpras" class="btn btn-sm btn-outline-dark">
                <span data-feather="arrow-left" class="align-text"></span> Kembali
            </a>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">

                    <form action="./process/sarpras/tambah.php" method="post">

                        <div class="mb-3">
                            <label for="nama_barang" class="form-label text-muted">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang...">
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label text-muted">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah...">
                        </div>

                        <div class="mb-3">
                            <label for="kondisi_baik" class="form-label text-muted">Kondisi Baik</label>
                            <input type="text" class="form-control" id="kondisi_baik" name="kondisi_baik" placeholder="Kondisi Baik">
                        </div>

                        <div class="mb-3">
                            <label for="kondisi_tidak_baik" class="form-label text-muted">Kondisi Tidak Baik</label>
                            <input type="text" class="form-control" id="kondisi_tidak_baik" name="kondisi_tidak_baik" placeholder="Kondisi Tidak Baik">
                        </div>

                        <div class="mb-3">
                            <label for="letak_barang" class="form-label text-muted">Letak Barang</label>
                            <input type="text" class="form-control" id="letak_barang" name="letak_barang" placeholder="Letak Barang">
                        </div>

                        <div class="py-2">
                            <hr>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">
                                <span data-feather="plus-square" class="align-text"></span>
                                Tambah
                            </button>
                            <a href="?page=sarpras" class="btn btn-outline-dark">
                                <span data-feather="x-square" class="align-text"></span>
                                Batal</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</main>
