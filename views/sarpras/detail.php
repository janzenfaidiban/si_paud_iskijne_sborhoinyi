

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                    <h1 class="h2 fw-bold">Detail Sarpras</h1>

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

                                <?php 

                                    include __DIR__ . '../../../config/database.php';   
                                    $id = $_GET['id'];
                                    $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM sarpras WHERE id = $id"));

                                ?>

                                <form action="#">


                                    <div class="mb-3">
                                        <label for="nama_barang" class="form-label text-muted">Nama Barang</label>
                                        <p class="fs-6"><?php echo $rows['nama_barang']; ?></p>
                                    </div>                                         

                                    <div class="mb-3">
                                        <label for="jumlah" class="form-label text-muted">Jumlah</label>
                                        <p class="fs-6"><?php echo $rows['jumlah']; ?></p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="kondisi_baik" class="form-label text-muted">Kondisi Baik</label>
                                        <p class="fs-6"><?php echo $rows['kondisi_baik']; ?></p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="kondisi_tidak_baik" class="form-label text-muted">Kondisi Tidak Baik</label>
                                        <p class="fs-6"><?php echo $rows['kondisi_tidak_baik']; ?></p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="letak_barang" class="form-label text-muted">Letak Barang</label>
                                        <p class="fs-6"><?php echo $rows['letak_barang']; ?></p>
                                    </div>

                                    <div class="py-2">
                                        <hr>
                                    </div>

                                    <div class="mb-3">
                                        <a href="?page=sarpras&action=ubah&id=<?php echo $rows['id']; ?>" class="btn btn-dark">
                                            <span data-feather="plus-circle" class="align-text"></span>
                                            Ubah
                                        </a>
                                    </div>


                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </main>