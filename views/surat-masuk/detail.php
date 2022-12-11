

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                    <h1 class="h2 fw-bold">Detail Surat Masuk</h1>

                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="?page=surat-masuk" class="btn btn-sm btn-outline-dark">
                            <span data-feather="arrow-left" class="align-text"></span> Kembali
                        </a>
                    </div>
                </div>

                <div class="row mb-5">

                    <div class="col-lg-12">

                        <div class="card">

                            <div class="card-body">

                                <?php 

                                    include __DIR__ . '../../../config/database.php';   
                                    $id = $_GET['id'];
                                    $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM surat WHERE id = $id"));

                                ?>
                                <div class="row">

                                    <div class="col-lg-4">
                                    
                                        <div class="mb-3">
                                            <label for="jenis_surat" class="form-label text-muted">Jenis Surat</label>
                                            <p class="fs-6"><?php echo $rows['jenis_surat']; ?></p>
                                        </div>                                         

                                        <div class="mb-3">
                                            <label for="tanggal_diterima" class="form-label text-muted">Tanggal Diterima</label>
                                            <p class="fs-6"><?php echo $rows['tanggal_diterima']; ?></p>
                                        </div>                                       

                                        <div class="mb-3">
                                            <label for="tanggal_surat" class="form-label text-muted">Tanggal Surat</label>
                                            <p class="fs-6"><?php echo $rows['tanggal_surat']; ?></p>
                                        </div>

                                        <div class="mb-3">
                                            <label for="nomor_surat" class="form-label text-muted">Nomor Surat</label>
                                            <p class="fs-6"><?php echo $rows['nomor_surat']; ?></p>
                                        </div>

                                        <div class="mb-3">
                                            <label for="pengirim" class="form-label text-muted">Pengirim</label>
                                            <p class="fs-6"><?php echo $rows['pengirim']; ?></p>
                                        </div>

                                    </div>

                                    <div class="col-lg-8 text-center">                                    
                                        <?php if(!empty($rows['surat'])) { echo '<iframe src="./surat/masuk/'.$rows['surat'].'" width="100%" height="1000px"></iframe>';} else {echo '<img src="./surat/img-0.png" width="150px">';} ?>
                                    </div>

                                </div>

                                    <div class="py-2">
                                        <hr>
                                    </div>

                                    <div class="mb-3">
                                        <a href="?page=surat-masuk&action=ubah&id=<?php echo $rows['id']; ?>" class="btn btn-dark">
                                            <span data-feather="plus-circle" class="align-text"></span>
                                            Ubah
                                        </a>
                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

            </main>