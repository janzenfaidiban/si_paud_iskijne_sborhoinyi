

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                    <h1 class="h2 fw-bold">Detail Buku Kas Umum</h1>

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

                                <?php 

                                    include __DIR__ . '../../../config/database.php';   
                                    $id = $_GET['id'];
                                    $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM buku_kas_umum WHERE id = $id"));

                                ?>

                                <div>

                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label text-muted">Tanggal</label>
                                        <p class="fs-6"><?php echo $rows['tanggal']; ?></p>
                                    </div>                                         

                                    <div class="mb-3">
                                        <label for="uraian" class="form-label text-muted">Uraian</label>
                                        <p class="fs-6"><?php echo $rows['uraian']; ?></p>
                                    </div>                                         

                                    <div class="mb-3">
                                        <label for="penerimaan" class="form-label text-muted">Penerimaan</label>
                                        <p class="fs-6"><?php if($rows["penerimaan"] != ''){echo 'Rp '. number_format($rows["penerimaan"]);} else {echo '-';} ?></p>
                                    </div>                                         

                                    <div class="mb-3">
                                        <label for="pengeluaran" class="form-label text-muted">Pengeluaran</label>
                                        <p class="fs-6"><?php if($rows["pengeluaran"] != ''){echo 'Rp '. number_format($rows["pengeluaran"]);} else {echo '-';} ?></p>
                                    </div>

                                    <div class="py-2">
                                        <hr>
                                    </div>

                                    <div class="mb-3">
                                        <a href="?page=buku-kas-umum&action=ubah&id=<?php echo $rows['id']; ?>" class="btn btn-dark">
                                            <span data-feather="plus-circle" class="align-text"></span>
                                            Ubah
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </main>