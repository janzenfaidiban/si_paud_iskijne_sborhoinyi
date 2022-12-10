

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                    <h1 class="h2 fw-bold">Detail Pembayaran SPP</h1>

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
                                    $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pembayaran_spp WHERE id = $id"));

                                ?>

                                <div>

                                    <div class="mb-3">
                                        <label for="bulan" class="form-label text-muted">Bulan</label>
                                        <p class="fs-6"><?php echo $rows['bulan']; ?></p>
                                    </div>                                         

                                    <div class="mb-3">
                                        <label for="iuran" class="form-label text-muted">Iuran</label>
                                        <p class="fs-6"><?php echo $rows['iuran']; ?></p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tanggal_pembayaran" class="form-label text-muted">Tanggal Pembayaran</label>
                                        <p class="fs-6"><?php echo $rows['tanggal_pembayaran']; ?></p>
                                    </div>

                                    <div class="py-2">
                                        <hr>
                                    </div>

                                    <div class="mb-3">
                                        <a href="?page=pembayaran-spp&action=ubah&id=<?php echo $rows['id']; ?>" class="btn btn-dark">
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