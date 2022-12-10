<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
        <h1 class="h2 fw-bold">Tambah Buku Kas Umum</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="?page=buku-kas-umum" class="btn btn-sm btn-outline-dark">
                <span data-feather="arrow-left" class="align-text"></span> Kembali
            </a>
        </div>

    </div>

    <div class="row mb-5">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">

                    <form action="./process/buku-kas-umum/tambah.php" method="post">

                        <div class="mb-3">
                            <label for="tanggal" class="form-label text-muted">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal...">
                        </div>

                        <div class="mb-3">
                            <label for="uraian" class="form-label text-muted">Uraian</label>
                            <textarea name="uraian" id="uraian" class="form-control" cols="30" rows="10" placeholder="Uraian..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="penerimaan" class="form-label text-muted">Penerimaan</label>
                            <input type="text" class="form-control" id="penerimaan" name="penerimaan" placeholder="Penerimaan...">
                        </div>

                        <div class="mb-3">
                            <label for="pengeluaran" class="form-label text-muted">Pengeluaran</label>
                            <input type="text" class="form-control" id="pengeluaran" name="pengeluaran" placeholder="Pengeluaran...">
                        </div>

                        <div class="py-2">
                            <hr>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">
                                <span data-feather="plus-square" class="align-text"></span>
                                Tambah
                            </button>
                            <a href="?page=buku-kas-umum" class="btn btn-outline-dark">
                                <span data-feather="x-square" class="align-text"></span>
                                Batal</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</main>
