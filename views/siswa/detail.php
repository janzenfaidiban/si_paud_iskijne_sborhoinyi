

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                    <h1 class="h2 fw-bold">Detail Siswa</h1>

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

                                <?php 

                                    include __DIR__ . '../../../config/database.php';   
                                    $id = $_GET['id'];
                                    $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM siswa WHERE id = $id"));

                                ?>

                                <form action="#">


                                    <div class="mb-3">
                                        <label for="nama_lengkap" class="form-label text-muted">Nama Lengkap</label>
                                        <p class="fs-6"><?php echo $rows['nama_lengkap']; ?></p>
                                    </div>                                         

                                    <div class="mb-3">
                                        <label for="nim" class="form-label text-muted">Nim</label>
                                        <p class="fs-6"><?php echo $rows['nim']; ?></p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tmp_tgl_lahir" class="form-label text-muted">Tempat, Tanggal Lahir</label>
                                        <p class="fs-6"><?php echo $rows['tmp_tgl_lahir']; ?></p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="jenis_kelamin" class="form-label text-muted">Jenis Kelamin</label>
                                        <p class="fs-6"><?php echo $rows['jenis_kelamin']; ?></p>
                                    </div>

                                    <div class="mb-3">
                                    <img src="./images/siswa/<?php if(!empty($rows['foto'])){ echo $rows['foto']; } else { echo "no-image.png"; } ?>" alt="Gambar" class="img img-thumbnail" width="100px">
                                    </div>

                                    <div class="py-2">
                                        <hr>
                                    </div>

                                    <div class="mb-3">
                                        <a href="?page=siswa&action=ubah&id=<?php echo $rows['id']; ?>" class="btn btn-dark">
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