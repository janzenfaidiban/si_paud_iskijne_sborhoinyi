<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
        <h1 class="h2 fw-bold">Tambah Pembayaran SPP</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="?page=pembayaran-spp" class="btn btn-sm btn-outline-dark">
                <span data-feather="arrow-left" class="align-text"></span> Kembali
            </a>
        </div>

    </div>

    <div class="row mb-5">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">

                    <form action="./process/pembayaran-spp/tambah.php" method="post">

                        <div class="mb-3">
                            <label for="bulan" class="form-label text-muted">Bulan</label>
                            <select name="bulan" id="bulan" class="form-select">
                                <option hidden>Pilih</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="iuran" class="form-label text-muted">Iuran</label>
                            <textarea id="iuran" cols="30" rows="5" class="form-control" name="iuran" placeholder="Iuran..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_pembayaran" class="form-label text-muted">Tanggal Pembayaran</label>
                            <input type="date" class="form-control" id="tanggal_pembayaran" name="tanggal_pembayaran" placeholder="Tanggal Pembayaran...">
                        </div>

                        <div class="py-2">
                            <hr>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">
                                <span data-feather="plus-square" class="align-text"></span>
                                Tambah
                            </button>
                            <a href="?page=pembayaran-spp" class="btn btn-outline-dark">
                                <span data-feather="x-square" class="align-text"></span>
                                Batal</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</main>
